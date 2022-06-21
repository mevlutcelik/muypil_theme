@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&display=swap');
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
            background: rgba(255, 255, 255, 0.15);
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        html,body {
            overflow: hidden;
        }

        .white-opc {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        .t-overflow-elipsis {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            max-width: 100%;
        }

        .card-body {
            padding: 1rem 1.5rem;
        }

        .muypil-terminal-cursor {
            -webkit-animation: blink 1s 0.5s infinite;
            -moz-animation: blink 1s 0.5s infinite;
            -o-animation: blink 1s 0.5s infinite;
            animation: blink 1s 0.5s infinite;
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 0;
            }
            40% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        @-moz-keyframes blink {
            0% {
                opacity: 0;
            }
            40% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        @-o-keyframes blink {
            0% {
                opacity: 0;
            }
            40% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        @keyframes blink {
            0% {
                opacity: 0;
            }
            40% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        .muypil-terminal {
            background-color: rgba(0,0,0,0.6);
            width: 100%;
            position: relative;
            color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .muypil-terminal-content {
            height: calc((var(--vh, 1vh) * 100) - 234px);
            max-height: calc((var(--vh, 1vh) * 100) - 234px);
            transition: all 0.3s;
            overflow: auto;
            padding-top: 1rem;
        }

        .alert-icon i{
            position: relative;
            padding: 0;
            margin-right: 0.5rem;
        }

        .alert-info{
            background-color: rgba(255,255,255,0.15);
            color: #eef6f9;
            font-size: 13px;
            display: flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
        }

        .alert-info a{
            color: #ffd9a3 !important;
        }

        .muypil-terminal.is-alert .muypil-terminal-content{
            height: calc((var(--vh, 1vh) * 100) - 300px);
            max-height: calc((var(--vh, 1vh) * 100) - 300px);
        }

        .muypil-terminal-header {
            position: sticky;
            top: 0;
            background-color: #000;
            font-family: 'Fira Code', monospace;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2rem;
            border-radius: 0.4rem 0.4rem 0 0;
            z-index: 99;
        }

        .circles {
            position: absolute;
            top: calc((2rem / 2) - (0.5rem / 2));
            left: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .circle-red, .circle-orange, .circle-green {
            width: 0.5rem;
            height: 0.5rem;
            border-radius: 50%;
            margin-right: 0.25rem;
        }

        .circle-red {
            background-color: #e2626b;
        }

        .circle-orange {
            background-color: #fab758;
        }

        .circle-green {
            background-color: #45c4a0;
        }

        .muypil-terminal-line {
            padding: 0 1rem 0.75em;
            margin: 0;
            font-size: 14px;
            font-family: 'Fira Code', monospace;
            font-weight: bold;
            align-items: center;
            width: 100%;
            line-height: 2;
            display: flex;
            flex-wrap: wrap;
        }

        .muypil-terminal-line:last-child {
            margin-bottom: 1rem;
        }

        .muypil-terminal-line .badge {
            border-radius: 0.25rem !important;
            margin: 0;
            margin-right: 0.5rem;
            font-weight: bold;
        }

        .muypil-terminal-line img {
            height: 0.75rem;
            object-fit: cover;
        }

        .swiper-container.dots-closer .swiper-pagination {
            bottom: -1rem;
        }

        .text-leaf {
            color: #c2efd8 !important;
        }

        .text-red{
            color: #ffccd0!important;
        }

        .dropdown-menu.show {
            background-color: #fff !important;
        }

        @media all and (min-width: 1200px) {
            .t-overflow-elipsis {
                max-width: 8.5vw;
            }

            .muypil-terminal-line {
                display: flex;
                width: 100%;
            }
        }
    </style>
@endpush
<section class="wrapper pt-14 pt-md-16 px-3 px-md-6 px-lg-12 px-xl-18">
    <div class="alert alert-info alert-icon" role="alert">
        <i class="uil uil-exclamation-circle"></i> <span>A simple info alert with <a href="#" class="alert-link hover">an example link</a>.</span>
    </div>
    <div class="card shadow-lg muypil-terminal is-alert"> {{--TODO: Eğer alert yoksa "is-alert" classını kaldıralım--}}
        <div class="muypil-terminal-header">
            <div class="circles">
                <div class="circle-red"></div>
                <div class="circle-orange"></div>
                <div class="circle-green"></div>
            </div>
            <span>Muypil Terminal</span>
        </div>
        <div class="muypil-terminal-content">
            <p class="muypil-terminal-line" style="line-height: 1.5">Muypil - Terminal [v2.06.48]</p>
            <p class="muypil-terminal-line mt-n1 mb-6" style="line-height: 1.25">&copy; 2021 Cyber Defense Inc.
                - {{__('theme2-global.all-rights-reserved')}}</p>
            <p class="muypil-terminal-line">
                <span class="me-2">$</span>
                <span class="badge bg-blue rounded-pill">2022.06.16 15:03</span>
                <span class="badge bg-green rounded-pill">359-318-6843</span>
                <span class="badge bg-navy rounded-pill">07-Alanya-17</span>
                <span class="os me-2">
                <img
                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIxIDEgMTc2IDE3NiI+PHN0eWxlPjwhW0NEQVRBWy5Ce2NsaXAtcGF0aDp1cmwoI0MpfS5De2ZpbGw6IzNlMjcyM30uRHtmaWxsLW9wYWNpdHk6LjE1fS5Fe2ZpbGwtb3BhY2l0eTouMn1dXT48L3N0eWxlPjxkZWZzPjxjaXJjbGUgaWQ9IkEiIGN4PSI5NiIgY3k9Ijk2IiByPSI4OCIvPjxwYXRoIGlkPSJCIiBkPSJNOCAxODRoODMuNzdsMzguODgtMzguODhWMTE2aC02OS4zTDggMjQuNDh6Ii8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iQyI+PHVzZSB4bGluazpocmVmPSIjQSIvPjwvY2xpcFBhdGg+PGcgY2xhc3M9IkIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03IC03KSI+PHBhdGggZD0iTTIxLjk3IDh2MTA4aDM5LjRMOTYgNTZoODhWOHoiIGZpbGw9IiNkYjQ0MzciLz48bGluZWFyR3JhZGllbnQgaWQ9IkQiIHgxPSIyOS4zNCIgeDI9IjgxLjg0IiB5MT0iNzUuMDIiIHkyPSI0NC4zNSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiNhNTI3MTQiIHN0b3Atb3BhY2l0eT0iLjYiIG9mZnNldD0iMCIvPjxzdG9wIHN0b3AtY29sb3I9IiNhNTI3MTQiIHN0b3Atb3BhY2l0eT0iMCIgb2Zmc2V0PSIuNjYiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGQ9Ik0yMS45NyA4djEwOGgzOS40TDk2IDU2aDg4Vjh6IiBmaWxsPSJ1cmwoI0QpIi8+PHBhdGggZD0iTTYyLjMgMTE1LjZMMjIuNDggNDcuM2wtLjU4IDEgMzkuNTQgNjcuOHoiIGNsYXNzPSJDIEQiLz48dXNlIHhsaW5rOmhyZWY9IiNCIiBmaWxsPSIjMGY5ZDU4Ii8+PGxpbmVhckdyYWRpZW50IGlkPSJFIiB4MT0iMTEwLjkiIHgyPSI1Mi41NCIgeTE9IjE2NC41IiB5Mj0iMTMwLjMiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjMDU1NTI0IiBzdG9wLW9wYWNpdHk9Ii40IiBvZmZzZXQ9IjAiLz48c3RvcCBzdG9wLWNvbG9yPSIjMDU1NTI0IiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iLjMzIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBkPSJNOCAxODRoODMuNzdsMzguODgtMzguODhWMTE2aC02OS4zTDggMjQuNDh6IiBmaWxsPSJ1cmwoI0UpIi8+PHBhdGggZD0iTTEyOS44IDExNy4zbC0uODMtLjQ4LTM4LjQgNjcuMTVoMS4xNWwzOC4xLTY2LjY0eiIgZmlsbD0iIzI2MzIzOCIgY2xhc3M9IkQiLz48ZGVmcz48cGF0aCBpZD0iRiIgZD0iTTggMTg0aDgzLjc3bDM4Ljg4LTM4Ljg4VjExNmgtNjkuM0w4IDI0LjQ4eiIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IkciPjx1c2UgeGxpbms6aHJlZj0iI0YiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNHKSI+PHBhdGggZD0iTTk2IDU2bDM0LjY1IDYwLTM4Ljg4IDY4SDE4NFY1NnoiIGZpbGw9IiNmZmNkNDAiLz48bGluZWFyR3JhZGllbnQgaWQ9IkgiIHgxPSIxMjEuOSIgeDI9IjEzNi42IiB5MT0iNDkuOCIgeTI9IjExNC4xIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iI2VhNjEwMCIgc3RvcC1vcGFjaXR5PSIuMyIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iI2VhNjEwMCIgc3RvcC1vcGFjaXR5PSIwIiBvZmZzZXQ9Ii42NiIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggZD0iTTk2IDU2bDM0LjY1IDYwLTM4Ljg4IDY4SDE4NFY1NnoiIGZpbGw9InVybCgjSCkiLz48L2c+PHBhdGggZD0iTTk2IDU2bDM0LjY1IDYwLTM4Ljg4IDY4SDE4NFY1NnoiIGZpbGw9IiNmZmNkNDAiLz48cGF0aCBkPSJNOTYgNTZsMzQuNjUgNjAtMzguODggNjhIMTg0VjU2eiIgZmlsbD0idXJsKCNIKSIvPjxkZWZzPjxwYXRoIGlkPSJJIiBkPSJNOTYgNTZsMzQuNjUgNjAtMzguODggNjhIMTg0VjU2eiIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IkoiPjx1c2UgeGxpbms6aHJlZj0iI0kiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNKKSI+PHBhdGggZD0iTTIxLjk3IDh2MTA4aDM5LjRMOTYgNTZoODhWOHoiIGZpbGw9IiNkYjQ0MzciLz48cGF0aCBkPSJNMjEuOTcgOHYxMDhoMzkuNEw5NiA1Nmg4OFY4eiIgZmlsbD0idXJsKCNEKSIvPjwvZz48L2c+PHJhZGlhbEdyYWRpZW50IGlkPSJLIiBjeD0iNjY4LjIiIGN5PSI1NS45NSIgcj0iODQuMDgiIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTU3NikiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjM2UyNzIzIiBzdG9wLW9wYWNpdHk9Ii4yIiBvZmZzZXQ9IjAiLz48c3RvcCBzdG9wLWNvbG9yPSIjM2UyNzIzIiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iMSIvPjwvcmFkaWFsR3JhZGllbnQ+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTcgLTcpIj48cGF0aCBkPSJNOTYgNTZ2MjAuOTVMMTc0LjQgNTZ6IiBmaWxsPSJ1cmwoI0spIiBjbGFzcz0iQiIvPjxnIGNsYXNzPSJCIj48ZGVmcz48cGF0aCBpZD0iTCIgZD0iTTIxLjk3IDh2NDAuMzRMNjEuMzYgMTE2IDk2IDU2aDg4Vjh6Ii8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iTSI+PHVzZSB4bGluazpocmVmPSIjTCIvPjwvY2xpcFBhdGg+PGcgY2xpcC1wYXRoPSJ1cmwoI00pIj48dXNlIHhsaW5rOmhyZWY9IiNCIiBmaWxsPSIjMGY5ZDU4Ii8+PHBhdGggZD0iTTggMTg0aDgzLjc3bDM4Ljg4LTM4Ljg4VjExNmgtNjkuM0w4IDI0LjQ4eiIgZmlsbD0idXJsKCNFKSIvPjwvZz48L2c+PC9nPjxyYWRpYWxHcmFkaWVudCBpZD0iTiIgY3g9IjU5Ny45IiBjeT0iNDguNTIiIHI9Ijc4LjA0IiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKC01NzYpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzNlMjcyMyIgc3RvcC1vcGFjaXR5PSIuMiIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzNlMjcyMyIgc3RvcC1vcGFjaXR5PSIwIiBvZmZzZXQ9IjEiLz48L3JhZGlhbEdyYWRpZW50PjxwYXRoIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03IC03KSIgZD0iTTIxLjk3IDQ4LjQ1bDU3LjI1IDU3LjI0TDYxLjM2IDExNnoiIGZpbGw9InVybCgjTikiIGNsYXNzPSJCIi8+PHJhZGlhbEdyYWRpZW50IGlkPSJPIiBjeD0iNjcxLjgiIGN5PSI5Ni4xNCIgcj0iODcuODciIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTU3NikiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjMjYzMjM4IiBzdG9wLW9wYWNpdHk9Ii4yIiBvZmZzZXQ9IjAiLz48c3RvcCBzdG9wLWNvbG9yPSIjMjYzMjM4IiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iMSIvPjwvcmFkaWFsR3JhZGllbnQ+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTcgLTcpIj48cGF0aCBkPSJNOTEuODMgMTgzLjlsMjAuOTYtNzguMiAxNy44NiAxMC4zeiIgZmlsbD0idXJsKCNPKSIgY2xhc3M9IkIiLz48ZyBjbGFzcz0iQiI+PGNpcmNsZSBjeD0iOTYiIGN5PSI5NiIgcj0iNDAiIGZpbGw9IiNmMWYxZjEiLz48Y2lyY2xlIGN4PSI5NiIgY3k9Ijk2IiByPSIzMiIgZmlsbD0iIzQyODVmNCIvPjxwYXRoIGQ9Ik05NiA1NWMtMjIuMSAwLTQwIDE3LjktNDAgNDB2MWMwLTIyLjEgMTcuOS00MCA0MC00MGg4OHYtMUg5NnoiIGNsYXNzPSJDIEUiLz48cGF0aCBkPSJNMTMwLjYgMTE2Yy02LjkyIDExLjk0LTE5LjggMjAtMzQuNiAyMC0xNC44IDAtMjcuNy04LjA2LTM0LjYtMjBoLS4wNEw4IDI0LjQ4djFMNjEuNCAxMTdjNi45MiAxMS45NCAxOS44IDIwIDM0LjYgMjAgMTQuOCAwIDI3LjY4LTguMDUgMzQuNi0yMGguMDV2LTFoLS4wNnoiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iLjEiLz48cGF0aCBkPSJNOTcgNTZjLS4xNyAwLS4zMy4wMi0uNS4wM0MxMTguMzYgNTYuMyAxMzYgNzQuMDggMTM2IDk2cy0xNy42NCAzOS43LTM5LjUgMzkuOTdjLjE3IDAgLjMzLjAzLjUuMDMgMjIuMSAwIDQwLTE3LjkgNDAtNDBzLTE3LjktNDAtNDAtNDB6IiBvcGFjaXR5PSIuMSIgY2xhc3M9IkMiLz48cGF0aCBkPSJNMTMxIDExNy4zYzMuNC01Ljg4IDUuMzctMTIuNjggNS4zNy0xOS45NmEzOS44NyAzOS44NyAwIDAgMC0xLjg3LTEyLjA5Yy45NSAzLjQyIDEuNSA3IDEuNSAxMC43MyAwIDcuMjgtMS45NyAxNC4wOC01LjM3IDE5Ljk2bC4wMi4wNC0zOC44OCA2OGgxLjE2TDEzMSAxMTcuM3oiIGZpbGw9IiNmZmYiIGNsYXNzPSJFIi8+PHBhdGggZD0iTTk2IDljNDguNDMgMCA4Ny43MiAzOS4xMyA4OCA4Ny41IDAtLjE3LjAxLS4zMy4wMS0uNSAwLTQ4LjYtMzkuNC04OC04OC04OFM4IDQ3LjQgOCA5NmMwIC4xNy4wMS4zMy4wMS41QzguMjggNDguMTMgNDcuNTcgOSA5NiA5eiIgZmlsbD0iI2ZmZiIgY2xhc3M9IkUiLz48cGF0aCBkPSJNOTYgMTgzYzQ4LjQzIDAgODcuNzItMzkuMTMgODgtODcuNSAwIC4xNy4wMS4zMy4wMS41IDAgNDguNi0zOS40IDg4LTg4IDg4UzggMTQ0LjYgOCA5NmMwLS4xNy4wMS0uMzMuMDEtLjUuMjcgNDguMzcgMzkuNTYgODcuNSA4OCA4Ny41eiIgY2xhc3M9IkMgRCIvPjwvZz48L2c+PC9zdmc+">
                <img class="jss325"
                     src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMjMyIiBoZWlnaHQ9IjI1MDAiIHZpZXdCb3g9IjMyLjE2MyA2OC41MDkgMjAzLjY5MSAyMjguMTU1Ij48cGF0aCBkPSJNMTAxLjg4NSAyMDcuMDkyYzcuODY1IDAgMTQuMjQxIDYuMzc2IDE0LjI0MSAxNC4yNDF2NjEuMDljMCA3Ljg2NS02LjM3NiAxNC4yNC0xNC4yNDEgMTQuMjQtNy44NjQgMC0xNC4yNC02LjM3NS0xNC4yNC0xNC4yNHYtNjEuMDljMC03Ljg2NCA2LjM3Ni0xNC4yNCAxNC4yNC0xNC4yNHoiIGZpbGw9IiNhNGM2MzkiLz48cGF0aCBkPSJNNjkuMzc0IDEzMy42NDVjLS4wNDcuNTQtLjA4OCAxLjA4Ni0uMDg4IDEuNjM4djkyLjU1N2MwIDkuOTU0IDcuODc5IDE3Ljk3MyAxNy42NiAxNy45NzNoOTQuMTI0YzkuNzgyIDAgMTcuNjYxLTguMDIgMTcuNjYxLTE3Ljk3M3YtOTIuNTU3YzAtLjU1Mi0uMDItMS4xLS4wNjYtMS42MzhINjkuMzc0eiIgZmlsbD0iI2E0YzYzOSIvPjxwYXRoIGQ9Ik0xNjYuMTMzIDIwNy4wOTJjNy44NjUgMCAxNC4yNDEgNi4zNzYgMTQuMjQxIDE0LjI0MXY2MS4wOWMwIDcuODY1LTYuMzc2IDE0LjI0LTE0LjI0MSAxNC4yNC03Ljg2NCAwLTE0LjI0LTYuMzc1LTE0LjI0LTE0LjI0di02MS4wOWMwLTcuODY0IDYuMzc2LTE0LjI0IDE0LjI0LTE0LjI0ek00Ni40MDUgMTQxLjg4MmM3Ljg2NCAwIDE0LjI0IDYuMzc2IDE0LjI0IDE0LjI0MXY2MS4wOWMwIDcuODY1LTYuMzc2IDE0LjI0MS0xNC4yNCAxNC4yNDEtNy44NjUgMC0xNC4yNDEtNi4zNzYtMTQuMjQxLTE0LjI0di02MS4wOWMtLjAwMS03Ljg2NSA2LjM3NS0xNC4yNDIgMTQuMjQxLTE0LjI0MnpNMjIxLjYxNCAxNDEuODgyYzcuODY0IDAgMTQuMjQgNi4zNzYgMTQuMjQgMTQuMjQxdjYxLjA5YzAgNy44NjUtNi4zNzYgMTQuMjQxLTE0LjI0IDE0LjI0MS03Ljg2NSAwLTE0LjI0MS02LjM3Ni0xNC4yNDEtMTQuMjR2LTYxLjA5YzAtNy44NjUgNi4zNzYtMTQuMjQyIDE0LjI0MS0xNC4yNDJ6TTY5Ljc5IDEyNy41NjVjLjM5Ni0yOC40MyAyNS4yMS01MS43NCA1Ny4wNjItNTQuODEyaDE0LjMxMmMzMS44NTQgMy4wNzMgNTYuNjY2IDI2LjM4NCA1Ny4wNjIgNTQuODEySDY5Ljc5eiIgZmlsbD0iI2E0YzYzOSIvPjxwYXRoIGQ9Ik03NC43NDMgNzAuMDA5bDE1LjAyMiAyNi4wMk0xOTMuMjc2IDcwLjAwOWwtMTUuMDIzIDI2LjAyIiBmaWxsPSJub25lIiBzdHJva2U9IiNhNGM2MzkiIHN0cm9rZS13aWR0aD0iMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PHBhdGggZD0iTTExNC44NzggMTAyLjA4N2MuMDEyIDMuOTc0LTMuMjc3IDcuMjA1LTcuMzQ3IDcuMjE2LTQuMDY4LjAxLTcuMzc2LTMuMjAyLTcuMzg4LTcuMTc2di0uMDRjLS4wMTEtMy45NzUgMy4yNzgtNy4yMDUgNy4zNDctNy4yMTYgNC4wNjgtLjAxMSA3LjM3NiAzLjIgNy4zODggNy4xNzZ2LjA0ek0xNjkuODc0IDEwMi4wODdjLjAxMiAzLjk3NC0zLjI3NyA3LjIwNS03LjM0NyA3LjIxNi00LjA2OC4wMS03LjM3Ni0zLjIwMi03LjM4OC03LjE3NnYtLjA0Yy0uMDExLTMuOTc1IDMuMjc4LTcuMjA1IDcuMzQ3LTcuMjE2IDQuMDY4LS4wMTEgNy4zNzYgMy4yIDcuMzg4IDcuMTc2di4wNHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=">
            </span>
                <span class="text-leaf">85.105.76.3 numaralı ip için izin verildi</span>
            </p>
            <p class="muypil-terminal-line">
                <span class="me-2">$</span>
                <span class="badge bg-blue rounded-pill">2022.06.16 15:29</span>
                <span class="badge bg-green rounded-pill">251-743-7350</span>
                <span class="badge bg-navy rounded-pill">63-01</span>
                <span class="os me-2">
                <img
                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIxIDEgMTc2IDE3NiI+PHN0eWxlPjwhW0NEQVRBWy5Ce2NsaXAtcGF0aDp1cmwoI0MpfS5De2ZpbGw6IzNlMjcyM30uRHtmaWxsLW9wYWNpdHk6LjE1fS5Fe2ZpbGwtb3BhY2l0eTouMn1dXT48L3N0eWxlPjxkZWZzPjxjaXJjbGUgaWQ9IkEiIGN4PSI5NiIgY3k9Ijk2IiByPSI4OCIvPjxwYXRoIGlkPSJCIiBkPSJNOCAxODRoODMuNzdsMzguODgtMzguODhWMTE2aC02OS4zTDggMjQuNDh6Ii8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iQyI+PHVzZSB4bGluazpocmVmPSIjQSIvPjwvY2xpcFBhdGg+PGcgY2xhc3M9IkIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03IC03KSI+PHBhdGggZD0iTTIxLjk3IDh2MTA4aDM5LjRMOTYgNTZoODhWOHoiIGZpbGw9IiNkYjQ0MzciLz48bGluZWFyR3JhZGllbnQgaWQ9IkQiIHgxPSIyOS4zNCIgeDI9IjgxLjg0IiB5MT0iNzUuMDIiIHkyPSI0NC4zNSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiNhNTI3MTQiIHN0b3Atb3BhY2l0eT0iLjYiIG9mZnNldD0iMCIvPjxzdG9wIHN0b3AtY29sb3I9IiNhNTI3MTQiIHN0b3Atb3BhY2l0eT0iMCIgb2Zmc2V0PSIuNjYiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGQ9Ik0yMS45NyA4djEwOGgzOS40TDk2IDU2aDg4Vjh6IiBmaWxsPSJ1cmwoI0QpIi8+PHBhdGggZD0iTTYyLjMgMTE1LjZMMjIuNDggNDcuM2wtLjU4IDEgMzkuNTQgNjcuOHoiIGNsYXNzPSJDIEQiLz48dXNlIHhsaW5rOmhyZWY9IiNCIiBmaWxsPSIjMGY5ZDU4Ii8+PGxpbmVhckdyYWRpZW50IGlkPSJFIiB4MT0iMTEwLjkiIHgyPSI1Mi41NCIgeTE9IjE2NC41IiB5Mj0iMTMwLjMiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjMDU1NTI0IiBzdG9wLW9wYWNpdHk9Ii40IiBvZmZzZXQ9IjAiLz48c3RvcCBzdG9wLWNvbG9yPSIjMDU1NTI0IiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iLjMzIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBkPSJNOCAxODRoODMuNzdsMzguODgtMzguODhWMTE2aC02OS4zTDggMjQuNDh6IiBmaWxsPSJ1cmwoI0UpIi8+PHBhdGggZD0iTTEyOS44IDExNy4zbC0uODMtLjQ4LTM4LjQgNjcuMTVoMS4xNWwzOC4xLTY2LjY0eiIgZmlsbD0iIzI2MzIzOCIgY2xhc3M9IkQiLz48ZGVmcz48cGF0aCBpZD0iRiIgZD0iTTggMTg0aDgzLjc3bDM4Ljg4LTM4Ljg4VjExNmgtNjkuM0w4IDI0LjQ4eiIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IkciPjx1c2UgeGxpbms6aHJlZj0iI0YiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNHKSI+PHBhdGggZD0iTTk2IDU2bDM0LjY1IDYwLTM4Ljg4IDY4SDE4NFY1NnoiIGZpbGw9IiNmZmNkNDAiLz48bGluZWFyR3JhZGllbnQgaWQ9IkgiIHgxPSIxMjEuOSIgeDI9IjEzNi42IiB5MT0iNDkuOCIgeTI9IjExNC4xIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iI2VhNjEwMCIgc3RvcC1vcGFjaXR5PSIuMyIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iI2VhNjEwMCIgc3RvcC1vcGFjaXR5PSIwIiBvZmZzZXQ9Ii42NiIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggZD0iTTk2IDU2bDM0LjY1IDYwLTM4Ljg4IDY4SDE4NFY1NnoiIGZpbGw9InVybCgjSCkiLz48L2c+PHBhdGggZD0iTTk2IDU2bDM0LjY1IDYwLTM4Ljg4IDY4SDE4NFY1NnoiIGZpbGw9IiNmZmNkNDAiLz48cGF0aCBkPSJNOTYgNTZsMzQuNjUgNjAtMzguODggNjhIMTg0VjU2eiIgZmlsbD0idXJsKCNIKSIvPjxkZWZzPjxwYXRoIGlkPSJJIiBkPSJNOTYgNTZsMzQuNjUgNjAtMzguODggNjhIMTg0VjU2eiIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IkoiPjx1c2UgeGxpbms6aHJlZj0iI0kiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNKKSI+PHBhdGggZD0iTTIxLjk3IDh2MTA4aDM5LjRMOTYgNTZoODhWOHoiIGZpbGw9IiNkYjQ0MzciLz48cGF0aCBkPSJNMjEuOTcgOHYxMDhoMzkuNEw5NiA1Nmg4OFY4eiIgZmlsbD0idXJsKCNEKSIvPjwvZz48L2c+PHJhZGlhbEdyYWRpZW50IGlkPSJLIiBjeD0iNjY4LjIiIGN5PSI1NS45NSIgcj0iODQuMDgiIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTU3NikiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjM2UyNzIzIiBzdG9wLW9wYWNpdHk9Ii4yIiBvZmZzZXQ9IjAiLz48c3RvcCBzdG9wLWNvbG9yPSIjM2UyNzIzIiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iMSIvPjwvcmFkaWFsR3JhZGllbnQ+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTcgLTcpIj48cGF0aCBkPSJNOTYgNTZ2MjAuOTVMMTc0LjQgNTZ6IiBmaWxsPSJ1cmwoI0spIiBjbGFzcz0iQiIvPjxnIGNsYXNzPSJCIj48ZGVmcz48cGF0aCBpZD0iTCIgZD0iTTIxLjk3IDh2NDAuMzRMNjEuMzYgMTE2IDk2IDU2aDg4Vjh6Ii8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iTSI+PHVzZSB4bGluazpocmVmPSIjTCIvPjwvY2xpcFBhdGg+PGcgY2xpcC1wYXRoPSJ1cmwoI00pIj48dXNlIHhsaW5rOmhyZWY9IiNCIiBmaWxsPSIjMGY5ZDU4Ii8+PHBhdGggZD0iTTggMTg0aDgzLjc3bDM4Ljg4LTM4Ljg4VjExNmgtNjkuM0w4IDI0LjQ4eiIgZmlsbD0idXJsKCNFKSIvPjwvZz48L2c+PC9nPjxyYWRpYWxHcmFkaWVudCBpZD0iTiIgY3g9IjU5Ny45IiBjeT0iNDguNTIiIHI9Ijc4LjA0IiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKC01NzYpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzNlMjcyMyIgc3RvcC1vcGFjaXR5PSIuMiIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzNlMjcyMyIgc3RvcC1vcGFjaXR5PSIwIiBvZmZzZXQ9IjEiLz48L3JhZGlhbEdyYWRpZW50PjxwYXRoIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03IC03KSIgZD0iTTIxLjk3IDQ4LjQ1bDU3LjI1IDU3LjI0TDYxLjM2IDExNnoiIGZpbGw9InVybCgjTikiIGNsYXNzPSJCIi8+PHJhZGlhbEdyYWRpZW50IGlkPSJPIiBjeD0iNjcxLjgiIGN5PSI5Ni4xNCIgcj0iODcuODciIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTU3NikiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjMjYzMjM4IiBzdG9wLW9wYWNpdHk9Ii4yIiBvZmZzZXQ9IjAiLz48c3RvcCBzdG9wLWNvbG9yPSIjMjYzMjM4IiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iMSIvPjwvcmFkaWFsR3JhZGllbnQ+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTcgLTcpIj48cGF0aCBkPSJNOTEuODMgMTgzLjlsMjAuOTYtNzguMiAxNy44NiAxMC4zeiIgZmlsbD0idXJsKCNPKSIgY2xhc3M9IkIiLz48ZyBjbGFzcz0iQiI+PGNpcmNsZSBjeD0iOTYiIGN5PSI5NiIgcj0iNDAiIGZpbGw9IiNmMWYxZjEiLz48Y2lyY2xlIGN4PSI5NiIgY3k9Ijk2IiByPSIzMiIgZmlsbD0iIzQyODVmNCIvPjxwYXRoIGQ9Ik05NiA1NWMtMjIuMSAwLTQwIDE3LjktNDAgNDB2MWMwLTIyLjEgMTcuOS00MCA0MC00MGg4OHYtMUg5NnoiIGNsYXNzPSJDIEUiLz48cGF0aCBkPSJNMTMwLjYgMTE2Yy02LjkyIDExLjk0LTE5LjggMjAtMzQuNiAyMC0xNC44IDAtMjcuNy04LjA2LTM0LjYtMjBoLS4wNEw4IDI0LjQ4djFMNjEuNCAxMTdjNi45MiAxMS45NCAxOS44IDIwIDM0LjYgMjAgMTQuOCAwIDI3LjY4LTguMDUgMzQuNi0yMGguMDV2LTFoLS4wNnoiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iLjEiLz48cGF0aCBkPSJNOTcgNTZjLS4xNyAwLS4zMy4wMi0uNS4wM0MxMTguMzYgNTYuMyAxMzYgNzQuMDggMTM2IDk2cy0xNy42NCAzOS43LTM5LjUgMzkuOTdjLjE3IDAgLjMzLjAzLjUuMDMgMjIuMSAwIDQwLTE3LjkgNDAtNDBzLTE3LjktNDAtNDAtNDB6IiBvcGFjaXR5PSIuMSIgY2xhc3M9IkMiLz48cGF0aCBkPSJNMTMxIDExNy4zYzMuNC01Ljg4IDUuMzctMTIuNjggNS4zNy0xOS45NmEzOS44NyAzOS44NyAwIDAgMC0xLjg3LTEyLjA5Yy45NSAzLjQyIDEuNSA3IDEuNSAxMC43MyAwIDcuMjgtMS45NyAxNC4wOC01LjM3IDE5Ljk2bC4wMi4wNC0zOC44OCA2OGgxLjE2TDEzMSAxMTcuM3oiIGZpbGw9IiNmZmYiIGNsYXNzPSJFIi8+PHBhdGggZD0iTTk2IDljNDguNDMgMCA4Ny43MiAzOS4xMyA4OCA4Ny41IDAtLjE3LjAxLS4zMy4wMS0uNSAwLTQ4LjYtMzkuNC04OC04OC04OFM4IDQ3LjQgOCA5NmMwIC4xNy4wMS4zMy4wMS41QzguMjggNDguMTMgNDcuNTcgOSA5NiA5eiIgZmlsbD0iI2ZmZiIgY2xhc3M9IkUiLz48cGF0aCBkPSJNOTYgMTgzYzQ4LjQzIDAgODcuNzItMzkuMTMgODgtODcuNSAwIC4xNy4wMS4zMy4wMS41IDAgNDguNi0zOS40IDg4LTg4IDg4UzggMTQ0LjYgOCA5NmMwLS4xNy4wMS0uMzMuMDEtLjUuMjcgNDguMzcgMzkuNTYgODcuNSA4OCA4Ny41eiIgY2xhc3M9IkMgRCIvPjwvZz48L2c+PC9zdmc+">
                <img class="jss325"
                     src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DTwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DTxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiIGhlaWdodD0iODgiIHdpZHRoPSI4OCI+DTxwYXRoIHN0eWxlPSJmaWxsOiMwMGFkZWY7IiBkPSJtMCwxMi40MDIsMzUuNjg3LTQuODYwMiwwLjAxNTYsMzQuNDIzLTM1LjY3LDAuMjAzMTN6bTM1LjY3LDMzLjUyOSwwLjAyNzcsMzQuNDUzLTM1LjY3LTQuOTA0MS0wLjAwMi0yOS43OHptNC4zMjYxLTM5LjAyNSw0Ny4zMTgtNi45MDYsMCw0MS41MjctNDcuMzE4LDAuMzc1NjV6bTQ3LjMyOSwzOS4zNDktMC4wMTExLDQxLjM0LTQ3LjMxOC02LjY3ODQtMC4wNjYzLTM0LjczOXoiLz4NPC9zdmc+">
            </span>
                <span class="text-red">176.232.151.133 numaralı ip engellendi</span>
            </p>
            <p class="muypil-terminal-line">
                <span class="me-2">$</span>
                <span class="badge gradient-2 rounded-pill">Denizkan Erdoğan</span>
                <span class="muypil-terminal-cursor user-select-none">_</span>
            </p>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        function appHeight() {
            const e = document.documentElement;
            e.style.setProperty("--vh", .01 * window.innerHeight + "px")
        }

        window.addEventListener("resize", appHeight), appHeight();
    </script>
@endpush
