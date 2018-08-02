<div id="captioned-gallery">
    <figure class="slider">
        <figure>
            <img src="https://anhdephd.com/wp-content/uploads/2018/01/hinh-anh-chu-cho-dep-va-ca-tinh.jpg" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="http://s1.1zoom.me/b4757/639/Cats_Dogs_Juice_Two_Poodle_Glasses_Funny_526822_1280x720.jpg" alt>
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="http://www.petcity.vn/media/news/2607_hinh-anh-meo-con-de-thuong-dang-yeu-dep-3.jpg" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="https://images.wallpaperscraft.com/image/dog_cat_grass_german_shepherd_65061_1280x720.jpg" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="https://upload.chjoy.com/uploads/1529013118721.jpg" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
    </figure>
</div>
<style>
    @import url(https://fonts.googleapis.com/css?family=Istok+Web);

    @keyframes slidy {
        0% {
            left: 0%;
        }
        20% {
            left: 0%;
        }
        25% {
            left: -100%;
        }
        45% {
            left: -100%;
        }
        50% {
            left: -200%;
        }
        70% {
            left: -200%;
        }
        75% {
            left: -300%;
        }
        95% {
            left: -300%;
        }
        100% {
            left: -400%;
        }
    }

    * {
        box-sizing: border-box;
    }

    body, figure {
        margin: 0;
        font-family: Istok Web, sans-serif;
        font-weight: 100;
        text-align: center;
    }

    div#captioned-gallery {
        width: 100%;
        overflow: hidden;
    }

    figure.slider {
        position: relative;
        width: 500%;
        font-size: 0;
        animation: 30s slidy infinite;
    }

    figure.slider figure {
        width: 20%;
        height: auto;
        display: inline-block;
        position: inherit;
    }

    figure.slider img {
        width: 100%;
        height: 650px;
    }

    figure.slider figure figcaption {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        width: 100%;
        font-size: 2rem;
        padding: .6rem;
    }
</style>