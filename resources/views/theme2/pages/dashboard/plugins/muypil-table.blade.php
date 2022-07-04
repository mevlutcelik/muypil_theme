@push('styles')
    <style>
        .table-responsive {
            cursor: -webkit-grab;
            cursor: grab;
            -webkit-transition: -webkit-transform 0.3s;
            transition: -webkit-transform 0.3s;
            -o-transition: transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
            width: 100%;
            overflow-x: auto;
            overflow-y: auto;
            scrollbar-color: rgba(0, 0, 0, 0.15) transparent;
            max-height: calc((var(--vh, 1vh) * 100) - 380px);
            position: relative;
        }

        .muypil-responsive-table{
            min-height: 7rem;
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
            background: rgba(255, 255, 255, 0.15);
        }

        /* Handle on hover */
        .table-responsive::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .table-responsive:active {
            cursor: -webkit-grabbing;
            cursor: grabbing;
        }

        .mx-filter-box {
            display: -webkit-box !important;
            width: 100%;
            overflow-y: hidden;
            overflow-x: auto;
        }

        .muypil-responsive-table.table thead {
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .muypil-responsive-table.table thead tr {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            backdrop-filter: blur(0.5rem);
        }

        .muypil-responsive-table.table th {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media all and (min-width: 768px) {
            .muypil-responsive-table.table th {
                min-width: 10rem;
            }
        }

        .muypil-responsive-table.table select {
            background: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none;
            color: #fff;
            height: 52px;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            -webkit-appearance: auto !important;
            -moz-appearance: auto !important;
            appearance: auto !important;
        }

        .muypil-responsive-table.table .block-btn {
            background: rgba(255, 255, 255, 0.15);
            color: #f1caca;
        }

        .muypil-responsive-table.table select option {
            background: #121212;
        }

        .muypil-responsive-table.table th.no-filter {
            font-size: 14px;
            padding: 0.6rem 1rem;
        }

        .muypil-responsive-table.table td {
            background-color: transparent;
            text-align: start;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            letter-spacing: 1px;
            /*min-width: 10rem;*/
            /*max-width: 10rem;*/
            overflow: hidden;
            /*width: 10rem;*/
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 56px;
            padding: 0 1rem !important;
            font-size: 14px;
            color: #fff;
        }

        .muypil-responsive-table.table .badge {
            background: rgba(255, 255, 255, 0.3) !important;
            border-radius: 4px !important;
            margin-left: 0.25rem;
        }

        .mx-table-input {
            background: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none;
            color: #fff;
            height: 64px;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
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

        .muypil-responsive-table.table > :not(caption) > * > *, .form-floating {
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

        ::-moz-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        ::-ms-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        ::placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        input[type="date"] {
            border: rgba(0, 0, 0, 0.1);
            border-radius: 2px;
            padding: 0.25rem 0.5rem;
            font-size: 15px;
            margin-left: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            color-scheme: dark;
        }

        input[type="date"]:focus {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
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

        /*table.muypil-responsive-table tr:not(.muypil-table-header) {
            pointer-events: none !important;
        }*/

        table.muypil-responsive-table td {
            background-color: transparent;
        }

        .d-initial {
            display: revert !important;
        }

        @media all and (min-width: 768px) {
            .d-md-initial {
                display: revert !important;
            }

            .d-md-none {
                display: none !important;
            }
        }

        .modal-body {
            padding: 2rem 1rem;
        }

        @media screen and (max-width: 992px) {
            /* min-width: 1px */
            /*table.muypil-responsive-table tr:not(.muypil-table-header) {
                pointer-events: initial !important;
            }*/
            table.muypil-responsive-table-mobile {
                border: 0;
            }

            table.muypil-responsive-table-mobile caption {
                font-size: 1.3em;
            }

            table.muypil-responsive-table-mobile thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table.muypil-responsive-table-mobile tr {
                border: none;
                border-bottom: 1px solid rgba(164, 174, 198, .2);
                margin-bottom: 3rem;
                word-break: break-all;
                background-color: transparent;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            table.muypil-responsive-table-mobile td {
                border: none;
                border-bottom: 1px solid rgba(164, 174, 198, .2);
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                font-size: .8em;
                text-align: right;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                word-break: break-all;
                color: #1a202c !important;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            table.muypil-responsive-table-mobile td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                min-width: 4rem;
                text-align: left;
                margin-right: 4px;
                font-weight: bold;
            }

            table.muypil-responsive-table-mobile td:last-child {
                border-bottom: 0;
            }
        }

        .swal2-popup.swal2-toast {
            font-size: 0.875rem;
            padding: 0.5rem;
        }

        a.page-link {
            background-color: rgba(255, 255, 255, 0.05);
            color: rgba(255, 255, 255, 0.5);
            font-weight: bold;
            border-color: rgba(255, 255, 255, 0.035);
        }

        .pagination .page-link {
            width: 2rem;
            height: 2rem;
        }

        .page-item.active .page-link, .page-item .page-link:hover {
            color: #fff !important;
            background-color: rgba(255, 255, 255, 0.32);
            border-color: rgba(255, 255, 255, 0.035);
        }

        .page-item.disabled .page-link {
            background-color: rgba(255, 255, 255, 0.05);
            color: rgba(255, 255, 255, 0.5);
            border-color: rgba(255, 255, 255, 0.035);
        }
    </style>
@endpush
{{--Modal Start--}}
<div class="modal fade" id="mx-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                <h2 class="mb-3 text-start">{{__('theme2-dashboard-global.detail')}}</h2>
                <div id="mx-modal-table-content"></div>
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-body -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->
{{--Modal Finish--}}

@push('scripts')
    <script>
        function sliderBox(selector) {
            const el = document.querySelector(selector);
            if (el !== null) {
                let mouseDown = false, startX, scrollLeft;
                let startDragging = function (e) {
                    mouseDown = true;
                    startX = e.pageX - el.offsetLeft;
                    scrollLeft = el.scrollLeft;
                };
                let stopDragging = function (event) {
                    mouseDown = false;
                };
                if (el !== null) {
                    el.addEventListener('mousemove', (e) => {
                        e.preventDefault();
                        if (!mouseDown) {
                            return;
                        }
                        const x = e.pageX - el.offsetLeft;
                        const scroll = x - startX;
                        el.scrollLeft = scrollLeft - scroll;
                    });
                    // Add the event listeners
                    el.addEventListener('mousedown', startDragging, false);
                    el.addEventListener('mouseup', stopDragging, false);
                    el.addEventListener('mouseleave', stopDragging, false);
                }
            }
        }
        sliderBox('.table-responsive');
        sliderBox('.muypil-top-bar'); /*TODO: Resources -> app.js ekle*/
        $(document).on('dblclick', 'tr[mx-modal="true"]:not(.muypil-table-header)', function (){
            if (this.innerHTML.trim() !== '&nbsp;' && this.innerHTML.trim() !== '') {
                navigator.clipboard.writeText(this.innerHTML.trim()).then(function () {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: '{{__('theme2-dashboard-global.copied-successfuly')}}'
                    })
                }, function (err) {
                    /*is->Err*/
                });
            } else {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'warning',
                    title: '{{__('theme2-dashboard-global.copied-null')}}'
                })
            }
        });
        $(document).on('click', 'tr[mx-modal="true"]:not(.muypil-table-header)', function () {
            if (window.innerWidth <= 768) {
                $('#mx-modal-table-content').html(null);
                $('#mx-modal').modal('show');
                let createTable = document.createElement('table');
                createTable.classList.add('table', 'table-bordered', 'muypil-responsive-table-mobile');
                createTable.style.border = '1px solid rgba(255,255,255,0.05)';
                createTable.innerHTML = this.outerHTML;
                $('#mx-modal-table-content').append(createTable);
                createTable.querySelectorAll('td').forEach(function (column) {
                    column.classList = '';
                    column.querySelectorAll('a').forEach(function (a) {
                        a.classList.add('bg-navy', 'white-text');
                    });
                    column.addEventListener('click', function () {
                        if (this.innerHTML.trim() !== '&nbsp;' && this.innerHTML.trim() !== '') {
                            navigator.clipboard.writeText(this.innerHTML.trim()).then(function () {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: '{{__('theme2-dashboard-global.copied-successfuly')}}'
                                })
                            }, function (err) {
                                /*is->Err*/
                            });
                        } else {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'warning',
                                title: '{{__('theme2-dashboard-global.copied-null')}}'
                            })
                        }
                    });
                });
            }
        });
    </script>
@endpush
