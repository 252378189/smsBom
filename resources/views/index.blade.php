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
            </tr>
            <tr>
                <td>136****0083</td>
                <td>5000</td>
            </tr>
        </table>
    </div>
   <div >
       <form action=""></form>
   </div>
@endsection

@section('footer')

@endsection