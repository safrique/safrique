@extends('layout.layout')

<?php $img_location = 'https://via.placeholder.com/150x80/0CCF1D/F41D11?text='; ?>

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <a href="/categories/scuba">
                <img src=<?= $img_location . 'SCUBA' ?> class="img-responsive"
                     style="width:100%" alt="Image">
            </a>

            <p>SCUBA</p>
        </div>

        <div class="col-sm-3">
            <a href="/categories/basketball">
                <img src=<?= $img_location . 'Basketball' ?> class="img-responsive" style="width:100%" alt="Image">
            </a>

            <p>Basketball</p>
        </div>

        <div class="col-sm-3">
            <a href="/categories/music">
                <img src=<?= $img_location . 'Music' ?> class="img-responsive" style="width:100%" alt="Image">
            </a>

            <p>Music</p>
        </div>

        <div class="col-sm-3">
            <a href="/categories/dev">
                <img src=<?= $img_location . 'Development' ?> class="img-responsive" style="width:100%" alt="Image">
            </a>

            <p>Development</p>
        </div>

        {{--<div class="col-sm-4">--}}
        {{--<div class="well">--}}
        {{--<p>Some text..</p>--}}
        {{--</div>--}}

        {{--<div class="well">--}}
        {{--<p>Some text..</p>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection