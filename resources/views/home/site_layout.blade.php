@extends('layout.layout')

@section('site-layout')
    <div class="container site_content">
        <h3>Site Layout</h3>

        <ol>
            <li>
                Welcome & About:
                <ul>
                    {{--                    <li>JavaScript framework: <a href="" target="_blank">TBC</a></li>--}}
                    {{--                    <li>JavaScript state management: <a href="" target="_blank">TBC</a></li>--}}
                    <li>Routes: <a href="https://laravel.com/docs/5.8/routing" target="_blank">
                            Standard Laravel routes</a></li>
                    <li>CSS: <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
                    <li>
                        Pages:
                        <ol>
                            <li><a href="/" target="_blank">Welcome/Home</a></li>
                            <li><a href="/about" target="_blank">About</a></li>
                            <li><a href="/site-layout">Site Layout</a></li>
                        </ol>
                    </li>
                </ul>
            </li>

            <li>
                Categories:
                <ul>
                    <li>JavaScript framework: <a href="https://vuejs.org/" target="_blank">Vue.js</a></li>
                    <li>JavaScript state management: <a href="https://vuex.vuejs.org/" target="_blank">VueX</a></li>
                    <li>Routes: <a href="https://router.vuejs.org" target="_blank">Vue Router</a></li>
                    <li>CSS: <a href="https://bulma.io/" target="_blank">Bulma</a></li>
                    <li>
                        Pages:
                        <ol>
                            <li><a href="/categories" target="_blank">Categories</a></li>
                            <li><a href="/categories/basketball" target="_blank">Basketball</a></li>
                            <li><a href="/categories/music" target="_blank">Music</a></li>
                            <li><a href="/categories/scuba" target="_blank">Scuba</a></li>
                            <li><a href="/categories/dev" target="_blank">Development</a></li>
                        </ol>
                    </li>
                </ul>
            </li>

            <li>
                Challenges:
                <ul>
                    <li>JavaScript framework: <a href="https://reactjs.org/" target="_blank">React</a></li>
                    {{--                    <li>JavaScript state management: <a href="https://vuex.vuejs.org/" target="_blank">React TBC</a>--}}
                    {{--                    </li>--}}
                    <li>Routes: <a href="https://reactjs.org/community/routing.html" target="_blank">React TBC</a></li>
                    <li>CSS: <a href="http://element-ui.cn/#/en-US" target="_blank">Element UI</a></li>
                    <li>
                        Pages:
                        <ol>
                            <li><a href="/categories" target="_blank">Categories</a></li>
                            {{--                            <li><a href="/categories" target="_blank">More to follow - TBC</a></li>--}}
                        </ol>
                    </li>
                </ul>
            </li>

            <li>
                Blog: TBC
                {{--                <ul>--}}
                {{--                    <li>JavaScript framework: <a href="https://vuejs.org/" target="_blank">Vue.js</a></li>--}}
                {{--                    <li>JavaScript state management: <a href="https://vuex.vuejs.org/" target="_blank">VueX</a></li>--}}
                {{--                    <li>Routes: <a href="https://router.vuejs.org" target="_blank">Vue Router</a></li>--}}
                {{--                    <li>CSS: <a href="https://bulma.io/" target="_blank">Bulma</a></li>--}}
                {{--                    <li>--}}
                {{--                        Pages:--}}
                {{--                        <ol>--}}
                {{--                            <li><a href="/blog" target="_blank">Blog</a></li>--}}
                {{--                        </ol>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </li>

            <li>
                Members: TBC
                {{--                <ul>--}}
                {{--                    <li>JavaScript framework: <a href="https://vuejs.org/" target="_blank">Vue.js</a></li>--}}
                {{--                    <li>JavaScript state management: <a href="https://vuex.vuejs.org/" target="_blank">VueX</a></li>--}}
                {{--                    <li>Routes: <a href="https://router.vuejs.org" target="_blank">Vue Router</a></li>--}}
                {{--                    <li>CSS: <a href="https://bulma.io/" target="_blank">Bulma</a></li>--}}
                {{--                    <li>--}}
                {{--                        Pages:--}}
                {{--                        <ol>--}}
                {{--                            <li><a href="/blog" target="_blank">Blog</a></li>--}}
                {{--                        </ol>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </li>
        </ol>
    </div>
@endsection
