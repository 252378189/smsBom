@extends('public.viewBase')

@section('content')
    <div class="desc">
        <img src="/img/brand_logo.png" alt="品牌logo">
        <h2>短信轰炸平台</h2>
        <p>本平台短信轰炸原理是大量发送请求各个网站,App,小程序中的注册或者其他短信接口,
            来达到目的,所以接受短信的手机大多接受得到的都是注册信息,不能发送谩骂信息。
            为了和谐,一个手机号本平台只允许轰炸一次,一次持续时长3天,多次投递是无效的请明确。
            <span style="color: red; font-weight: 700">本平台为免费平台!</span>
        </p>
    </div>
    <div class="case">
        <h2>最新投递</h2>
        <table>
            <tr>
                <td>手机号</td>
                <td>短信发送次数</td>
                <td>任务投递时间</td>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td>{{substr_replace($task['phone'], '****', 3, 4)}}</td>
                    <td>{{$task['count']}}</td>
                    <td>{{$task['created_at']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="phone-submit">
        @include('public.messages')
        @include('public.errors')
        <h2>提交你的需求</h2>
            <div class="row">
                <div class="col-lg-6 col-md-offset-3">
                    <form action="/store" method="post">
                        <div class="input-group">
                              <span class="input-group-btn">
                                  <input class="btn btn-success"  type="submit" value="提交信息!">
                              </span>
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="受害者手机号码">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>
                    </form>

                </div>
            </div>
            <img src="/img/bjx.png" alt="">
    </div>
    <div class="statement">
        <h1>声明</h1>
        <p>本平台设立是为了解除广大网友一时之气愤,请勿用于非法用途,法律后果由提交信息者自行承担,谢谢配合</p>
    </div>

    <div class="contact">
        <h2>联系方式</h2>
        <p style="font-size: 16px">如果你在使用上有什么问题可以联系我</p>
        <p style="color: blue;">QQ:513051043</p>
        <p style="color: blue;">Email:513051043@qq.com</p>
    </div>
@endsection

@section('footer')
<div style="margin-bottom: 100px"></div>
@endsection