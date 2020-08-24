<?php

namespace App\Traits\Coupon;

use App\Exceptions\CouponNotEligibleToBeApplied;
use App\Services\EligibilityResult;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;

trait CouponHasEligibilities
{
    public function eligibleToUse()
    {
        try {
            $this->checkEligibility();
        } catch (CouponNotEligibleToBeApplied $exception) {
            return new EligibilityResult(false, $exception->getMessage());
        }

        return new EligibilityResult(true);
    }

    public function checkEligibility()
    {
        if (!$this->enabled) {
            throw new CouponNotEligibleToBeApplied(trans('eligibilities.coupon_invalid'));
        } elseif (!$this->hasRemainingUses()) {
            throw new CouponNotEligibleToBeApplied(trans('eligibilities.coupon_limit_reached'));
        } elseif (!$this->isValidFrom() || !$this->isValidTo()) {
            throw new CouponNotEligibleToBeApplied(trans('eligibilities.coupon_expired'));
        } elseif (!$this->isValidForUser()) {
            throw new CouponNotEligibleToBeApplied(trans('eligibilities.coupon_already_used'));
        } elseif (!$this->isValidForCouponCombination()) {
            throw new CouponNotEligibleToBeApplied(trans('eligibilities.coupon_combination_not_allowed'));
        } elseif (!$this->movHasBeenMet()) {
            throw new CouponNotEligibleToBeApplied(trans('eligibilities.coupon_moq_not_reached'));
        }

        return true;
    }

    protected function movHasBeenMet()
    {
        return Cart::totalFloat() >= $this->mov;
    }

    protected function isValidForCouponCombination()
    {
        return $this->can_be_combined ? true : Cart::content()->filter(fn(CartItem $cartItem) => $cartItem->options->has('coupon'))->isEmpty();
    }

    protected function isValidForUser()
    {
        if (auth()->guest()) {
            return false;
        }

        return $this->once_per_user ? $this->orders()->where('user_id', currentUser()->id)->doesntExist() : true;
    }

    protected function hasRemainingUses()
    {
        return $this->times_used < $this->max_usage;
    }

    protected function isValidFrom()
    {
        return $this->valid_from ? Carbon::today()->gte($this->valid_from->setTime(0, 0)) : true;
    }

    protected function isValidTo()
    {
        return $this->valid_to ? Carbon::today()->lte($this->valid_to->setTime(0, 0)) : true;
    }
}
