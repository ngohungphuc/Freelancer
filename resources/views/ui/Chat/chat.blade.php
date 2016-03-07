@extends('ui.layout')
@section('content')
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/nodejs/node_modules/socket.io-client/socket.io.js"  type="text/javascript"></script>
<script src="/nodejs/server.js"></script>
<link rel="stylesheet" type="text/css" href="/css/chat.css">
<div class="container" style="margin-top:10%;margin-bottom:10%">
    <div class="row">
        <div class="conversation-wrap col-lg-3">
            @foreach ($chat_message as $message)
            <div class="media conversation">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="/{{$message->user->avatar}}">
                </a>
                <div class="media-body">
                    <h5 class="media-heading"> {{$message->from_user}}</h5>
                    <small></small>
                </div>
            </div>
            @endforeach

        </div>



        <div class="message-wrap col-lg-8">
            <div class="msg-wrap">
                <div class="media msg " id="messages">
                    @foreach ($chat_message as $message)
                    <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="/{{$message->user->avatar}}">
                </a>
                <div class="media-body">
                    <h5 class="media-heading"> {{$message->from_user}}</h5>
                    <small>{{$message->content}}</small>
                </div>

                    @endforeach
                </div>

            </div>

            <div class="send-wrap ">

                <textarea class="form-control send-message" rows="3" placeholder="Write a reply..." id="messageInput"></textarea>


            </div>
            <form class="form-inline" id="messageForm">
             {!! csrf_field() !!}
             <div>
                <input type="submit" value="Gửi" id="sendMess" class="btn btn-primary btn-block" />
            </div>
        </form>
    </div>
</div>
</div>

@stop