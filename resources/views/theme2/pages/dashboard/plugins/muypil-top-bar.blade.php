@push('styles')
    <style>
        .tab-content {
            margin-top: 0;
            width: 100%;
            height: calc((var(--vh, 1vh) * 100) - 290px);
            overflow-y: auto;
            overflow-x: hidden;
        }

        /* width */
        .muypil-top-bar::-webkit-scrollbar {
            width: 0;
        }

        .muypil-top-bar{
            scrollbar-color: #0A4C95 rgba(255,255,255,0.15);
        }

        /* Track */
        .muypil-top-bar::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        .muypil-top-bar::-webkit-scrollbar-thumb {
            background: transparent;
        }

        /* Handle on hover */
        .muypil-top-bar::-webkit-scrollbar-thumb:hover {
            background: transparent;
        }

        .muypil-top-bar {
            display: -webkit-box;
            overflow-x: auto;
            overflow-y: hidden;
            -ms-flex-wrap: initial;
            flex-wrap: initial;
            max-width: 100vw;
        }

        .muypil-top-bar .nav-link {
            border-radius: 2px;
            padding: 0.5rem 0.75rem;
            font-size: 16px;
            margin-bottom: 0 !important;
            margin-right: 0.5rem !important;
            background: rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.7);
        }

        .muypil-top-bar .nav-link:hover, .muypil-top-bar .nav-link:focus {
            color: #fab758;
        }

        .muypil-top-bar .nav-link:active {
            cursor: -webkit-grab;
            cursor: grab;
        }

        .muypil-top-bar .nav-link.active {
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
        }

        .muypil-top-bar .nav-link i {
            font-size: 18px;
        }
    </style>
@endpush
@push('scripts')
    <script>
        const sliderTabButtons = document.querySelector('.muypil-top-bar');
        let mouseDownTabButtons = false;
        let startXTabButtons, scrollLeftTabButtons;
        let startDraggingTabButtons = function (e) {
            mouseDownTabButtons = true;
            startXTabButtons = e.pageX - sliderTabButtons.offsetLeft;
            scrollLeftTabButtons = sliderTabButtons.scrollLeft;
        };
        let stopDraggingTabButtons = function (event) {
            mouseDownTabButtons = false;
        };
        sliderTabButtons.addEventListener('mousemove', (e) => {
            e.preventDefault();
            if (!mouseDownTabButtons) {
                return;
            }
            const xTabButtons = e.pageX - sliderTabButtons.offsetLeft;
            const scrollTabButtons = xTabButtons - startXTabButtons;
            sliderTabButtons.scrollLeft = scrollLeftTabButtons - scrollTabButtons;
        });
        // Add the event listeners
        sliderTabButtons.addEventListener('mousedown', startDraggingTabButtons, false);
        sliderTabButtons.addEventListener('mouseup', stopDraggingTabButtons, false);
        sliderTabButtons.addEventListener('mouseleave', stopDraggingTabButtons, false);
    </script>
@endpush
