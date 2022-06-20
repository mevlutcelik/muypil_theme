@push('styles')
    <style>
        .table-responsive{
            cursor: grab;
            transition: transform 0.3s;
        }
        /* width */
        .table-responsive::-webkit-scrollbar {
            width: 2px;
            height: 2px;
        }

        /* Track */
        .table-responsive::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        .table-responsive::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.15);
        }

        /* Handle on hover */
        .table-responsive::-webkit-scrollbar-thumb:hover {
            background: rgba(255,255,255,0.2);
        }
        .table-responsive:active{
            cursor: grabbing;
        }
        @media all and (min-width: 992px) {
            .table-responsive:active{
                transform: scale(0.95);
            }
        }
        .mx-filter-box {
            display: -webkit-box !important;
            width: 100%;
            overflow-y: hidden;
            overflow-x: auto;
        }

        .table th {
            min-width: 10rem;
        }

        .table select {
            background: transparent;
            box-shadow: none;
            border: none;
            color: #fff;
            height: 52px;
            transition: all 0.3s;
            appearance: auto !important;
        }

        .table .block-btn {
            background: rgba(255, 255, 255, 0.15);
            color: #f1caca;
        }

        .table select option {
            background: #121212;
        }

        .table th.no-filter {
            font-size: 14px;
            padding: 0.6rem 1rem;
        }

        .table td {
            background-color: transparent;
            text-align: center;
            min-width: 10rem;
            max-width: 10rem;
            overflow: hidden;
            width: 10rem;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 56px;
            padding: 0 0.5rem;
            font-size: 14px;
            color: #fff;
        }

        .table .badge {
            background: rgba(255, 255, 255, 0.3) !important;
            border-radius: 4px !important;
            margin-left: 0.25rem;
        }

        .mx-table-input {
            background: transparent;
            box-shadow: none;
            border: none;
            color: #fff;
            height: 64px;
            transition: all 0.3s;
        }

        .mx-table-input:focus {
            color: #fff;
            background: transparent;
        }

        .mx-table-input:focus ~ label {
            color: rgba(255, 255, 255, 0.6);
        }

        .mx-table-input ~ label {
            color: #fff;
        }

        .table > :not(caption) > * > *, .form-floating {
            padding: 0;
        }

        .form-floating > label {
            padding-top: 14px;
        }

        ::-webkit-input-placeholder { /* Edge */
            color: rgba(0, 0, 0, 0.4);
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: rgba(0, 0, 0, 0.4);
        }

        ::placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        input[type="date"] {
            border: rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            padding: 0.25rem 0.5rem;
            font-size: 15px;
            margin-left: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            color-scheme: dark;
        }

        .input-date {
            margin-bottom: 1rem;
        }

        .input-date label {
            margin-left: 0.5rem;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 4px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.15);
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.2);
        }

        table.muypil-responsive-table td {
            background-color: transparent;
        }

        /*@media screen and (max-width: 992px) {
            !* min-width: 1px *!
            .table-responsive {
                overflow: hidden;
            }

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
                border-radius: 1rem;
                border: none;
                border-bottom: 1px solid rgba(164, 174, 198, .2);
                display: block;
                margin-bottom: 3rem;
                word-break: break-all;
                background-color: #fff;
            }

            table.muypil-responsive-table td {
                border: none;
                border-bottom: 1px solid rgba(164, 174, 198, .2);
                display: block;
                font-size: .8em;
                text-align: right;
                justify-content: space-between;
                word-break: break-all;
            }

            table.muypil-responsive-table td::before {
                !*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                *!
                content: attr(data-label);
                float: left;
                font-weight: bold;
            }

            table.muypil-responsive-table td:last-child {
                border-bottom: 0;
            }
        }*/
    </style>
@endpush
@push('scripts')
    <script>
        const sliderTableBox = document.querySelector('.table-responsive');
        let mouseDownTableBox = false;
        let startXTableBox, scrollLeftTableBox;
        let startDraggingTableBox = function (e) {
            mouseDownTableBox = true;
            startXTableBox = e.pageX - sliderTableBox.offsetLeft;
            scrollLeftTableBox = sliderTableBox.scrollLeft;
        };
        let stopDraggingTableBox = function (event) {
            mouseDownTableBox = false;
        };
        sliderTableBox.addEventListener('mousemove', (e) => {
            e.preventDefault();
            if (!mouseDownTableBox) {
                return;
            }
            const xTableBox = e.pageX - sliderTableBox.offsetLeft;
            const scrollTableBox = xTableBox - startXTableBox;
            sliderTableBox.scrollLeft = scrollLeftTableBox - scrollTableBox;
        });
        // Add the event listeners
        sliderTableBox.addEventListener('mousedown', startDraggingTableBox, false);
        sliderTableBox.addEventListener('mouseup', stopDraggingTableBox, false);
        sliderTableBox.addEventListener('mouseleave', stopDraggingTableBox, false);
    </script>
@endpush
