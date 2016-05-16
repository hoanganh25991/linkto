@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Subscribe</div>

                <div class="panel-body">
                    <form method="POST" action="/subscribe">
                        <!-- <input type="hidden" name="_token" value="<?php csrf_token(); ?>"> -->
                        <?php //echo csrf_field(); ?>
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="text" name="email" value="">
                        <button>subcribe</button>
                    </form>
                    <div id="message">
                        <?php if(isset($email)){ ?>
                            <p>{{$email}}</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
