@push('styles')
    <style>
        .mx-filter-box{
            display: -webkit-box !important;
            width: 100%;
            overflow-y: hidden;
            overflow-x: auto;
        }
        .mx-filter-box:active, .mx-filter-box input:active{
            cursor: grab;
        }
        .mx-filter {
            max-width: 7.5rem;
        }
        /* width */
        .mx-filter-box::-webkit-scrollbar {
            width: 0;
        }

        /* Track */
        .mx-filter-box::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        .mx-filter-box::-webkit-scrollbar-thumb {
            background: transparent;
        }

        /* Handle on hover */
        .mx-filter-box::-webkit-scrollbar-thumb:hover {
            background: transparent;
        }

        input[type="date"] {
            background: #fff;
            border: rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            padding: 0.25rem 0.5rem;
            font-size: 15px;
            margin-left: 0.5rem;
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
        table.muypil-responsive-table td{
            background-color: #fff;
        }
        @media screen and (max-width: 992px) { /* min-width: 1px */
            .table-responsive{
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
                border-bottom: 1px solid rgba(164,174,198,.2);
                display: block;
                margin-bottom: 3rem;
                word-break: break-all;
                background-color: #fff;
            }

            table.muypil-responsive-table td {
                border: none;
                border-bottom: 1px solid rgba(164,174,198,.2);
                display: block;
                font-size: .8em;
                text-align: right;
                justify-content: space-between;
                word-break: break-all;
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
    </style>
@endpush
@push('scripts')
    <script>
        const sliderTableBox = document.querySelector('.mx-filter-box');
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
