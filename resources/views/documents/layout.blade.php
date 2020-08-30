@extends('layouts.base')

@section('body')
    <div x-data="{}" class="printbar fixed top-0 inset-x-0 bg-gray-200 shadow flex justify-between items-center p-4">
        <h1 class="text-lg font-semibold text-gray-800">Preview</h1>
        <button @click.prevent="window.print()"
                class="rounded text-white flex justify-center items-center focus:outline-none bg-teal-600 hover:bg-teal-500 px-2 py-1">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4 text-white">
                <path
                    d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z"
                    clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
            <span class="ml-2">Print Document</span>
        </button>
    </div>

    <div class="document">
        @yield('document')
    </div>
@endsection

@push('styles')
    <style>
        @media screen {
            body {
                background: #97a6ba;
            }

            .document {
                width: 1200px;
                min-height: 100rem;
                margin: 6rem auto;
                padding: 2rem 3rem;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.10);
                background-color: white;
            }
        }

        @media print {
            .printbar {
                display: none;
            }

            table {
                page-break-after: auto
            }

            tr {
                page-break-inside: avoid;
                page-break-after: auto
            }

            td {
                page-break-inside: avoid;
                page-break-after: auto
            }

            thead {
                display: table-header-group
            }

            tfoot {
                display: table-footer-group
            }
        }
    </style>
@endpush
