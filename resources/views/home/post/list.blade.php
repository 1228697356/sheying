@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../../images/15348312643571922_64925705_W640.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="../../images/15458750817180588_200330784_W480.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="../../images/15433111614795251_200330784_H360.jpg" alt=""></div>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination"></div>

                    <!-- 如果需要导航按钮 -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- 如果需要滚动条 -->
                    <div class="swiper-scrollbar"></div>
                </div>
                <div class="warp">
                    <div class="wenzhang">
                        <h3>黑白与光影</h3>

                        <p><span>发布：</span>18年23月19日<span>分类：</span>手机摄影 <span>举报</span></p>

                        <p>观看一个展览，人们都在观看图片和文字，我却被展板的光影吸引，降低曝光，排除展板的内容和图片，只选取展板的边缘和局部进入画面，抽离出抽象的形式和线条。</p>
                    </div>
                    <div class="hua">
                        <img src="../../images/login/15451134803326831_200478990.jpg" alt="">
                    </div>
                    <form class="ping" action="" method="post">
                        <span>发表你的评论</span>
                        <textarea></textarea>
                        <button  class="commonBtn" type="button">评论</button>
                    </form>
                    <div class="xinxi">
                        <div class="touxiang">
                            <a href=""><img src="../../images/login/15154942829134973_178536587.jpg" alt=""></a>
                        </div>
                        <div class="xinxi_txt">
                            <p>小新哈哈哈<span>2019年1月3日20:32:00</span></p>
                            <h4>哈哈</h4>
                            <a href="">回复</a><a href="">删除</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="yonghu">
                    <div class="touxiang_right">
                            <a href=""><img src="../../images/login/15154942829134973_178536587.jpg" alt=""></a>
                            <div class="yonghu_txt">
                                <h3>小新哈哈哈</h3>
                                <p>发烧天地二级</p>
                            </div>
                            <div class="guanzhu"><a href="">+关注</a></div>
                        </div>
                    <div class="jinghua">

                    </div>
                    <div class="toupiao">
                        <a href="#" class="zans">投票支持！</a>
                        <a href="#" class="zan">写评论</a>
                        <a href="#" class="zan">收藏作品</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
