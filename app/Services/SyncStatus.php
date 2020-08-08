<?php

namespace App\Services;

use App\Models\Setting;
use Carbon\Carbon;
use Laravel\Horizon\Contracts\JobRepository;

class SyncStatus
{
    private $job;

    public function __construct($job)
    {
        $this->job = $job;
    }

    public function lastUpdate()
    {
        return $this->job ? ($this->job->reserved_at ? Carbon::createFromTimestamp($this->job->reserved_at)->format('j.n.Y H:i') : __('google_sheets.now')) : __('google_sheets.never');
    }

    public function nextPossibleUpdate()
    {
        return $this->job ? Carbon::createFromTimestamp($this->job->reserved_at)->addHours(config('config.sync_limit_every_hrs'))->diffForHumans() : __('google_sheets.now');
    }

    public function duration()
    {
        if (!$this->job) return __('google_sheets.not_active_yet');

        $reservedAt = Carbon::createFromTimestamp($this->job->reserved_at);

        if ($this->succeeded()) {
            return Carbon::createFromTimestamp($this->job->completed_at)->diffForHumans($reservedAt, true);
        } elseif ($this->failed()) {
            return Carbon::createFromTimestamp($this->job->failed_at)->diffForHumans($reservedAt, true);
        } else {
            return __('google_sheets.pending');
        }
    }

    public function status()
    {
        return $this->job ? __("google_sheets.{$this->job->status}") : __('google_sheets.not_active_yet');
    }

    public function failed()
    {
        return $this->job && $this->job->failed_at;
    }

    public function succeeded()
    {
        return $this->job && $this->job->completed_at;
    }

    public function running()
    {
        return $this->job && !$this->job->completed_at && !$this->job->failed_at;
    }

    public function job()
    {
        return $this->job;
    }

    public function exception()
    {
        return $this->job->exception;
    }

    public function eligibleToRun()
    {
        return $this->succeeded() ? Carbon::createFromTimestamp($this->job->reserved_at)->diffInHours() >= config('config.sync_limit_every_hrs') : true;
    }

    public static function log(string $type, string $jobId)
    {
        return ($jobId && $type) ? Setting::saveConfiguration($type, compact('jobId')) : null;
    }

    public static function get(string $type)
    {
        $repository = app(JobRepository::class);
        $jobId = optional((object)Setting::loadConfiguration($type))->jobId;

        return new static($repository->getJobs(iterable($jobId))->first());
    }
}
