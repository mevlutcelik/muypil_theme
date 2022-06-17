@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        table.muypil-responsive-table {
            border: 1px solid rgba(8, 60, 130, .07);
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            border-radius: 0.5rem;
            width: 100%;
            table-layout: fixed;
            font-family: 'Urbanist', sans-serif;
            font-size: 18px;
            margin-bottom: 1rem;
        }

        table.muypil-responsive-table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table.muypil-responsive-table tr {
            border-radius: 0.5rem;
            background-color: #fff;
            border: 1px solid rgba(8, 60, 130, .07);
            padding: .35em;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        }

        table.muypil-responsive-table th,
        table.muypil-responsive-table td {
            padding: .625em;
            word-break: break-all;
        }

        table.muypil-responsive-table th {
            font-size: .85em;
            letter-spacing: .1em;
        }

        @media screen and (min-width: 1px) {
            table.muypil-responsive-table {
                border: 0;
            }

            table.muypil-responsive-table caption {
                font-size: 1.3em;
            }

            table.muypil-responsive-table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table.muypil-responsive-table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table.muypil-responsive-table td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
            }

            table.muypil-responsive-table td:last-child {
                border-bottom: 0;
            }
        }

        .dataTables_length {
            font-size: 14px;
            margin-bottom: 1.5rem;
        }

        .dataTables_wrapper .dataTables_length select {
            padding: 0;
            height: 2rem;
            width: 2rem;
            text-align: center;
            font-size: .75rem;
            font-weight: bold;
            margin: 0 0.25rem;
            color: #959ca9;
            background-color: #fff;
            border: 1px solid rgba(8, 60, 130, .07);
            border-radius: 0.4rem;
            box-shadow: 0 0 1.25rem rgba(30, 34, 40, 0.04);
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            font-family: 'Urbanist', sans-serif;
        }

        .dataTables_wrapper .dataTables_filter {
            font-size: 14px;
        }

        .dataTables_wrapper .dataTables_filter input {
            background-color: #fff;
            font-family: 'Urbanist', sans-serif;
            font-weight: bold;
            margin-left: 0.5rem;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(8, 60, 130, .07);
            border-radius: 0.4rem;
            box-shadow: 0 0 1.25rem rgba(30, 34, 40, 0.04);
            outline: none;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        table.muypil-responsive-table tbody {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        table.muypil-responsive-table tr {
            background-color: #fff !important;
            width: 100%;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
        }

        @media all and (min-width: 600px) {
            table.muypil-responsive-table tr {
                width: 48%;
                margin-bottom: 1.5rem;
            }
        }

        @media all and (min-width: 992px) {
            table.muypil-responsive-table tr {
                width: 30%;
                margin-bottom: 3rem;
            }
        }

        table.dataTable thead th, table.dataTable thead td, table.muypil-responsive-table td {
            border-bottom: 1px solid rgba(8, 60, 130, .07);
            background-color: #fff;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: #fff;
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 0.4rem;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(8, 60, 130, .07);
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-size: 14px;
            font-weight: bold;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid transparent;
        }
    </style>
@endpush
@push('scripts')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@endpush
