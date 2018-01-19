<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sohayok - Presentation</title>
    <link rel="stylesheet" href="{!! asset('gallery/css/blueimp-gallery.min.css') !!}">

</head>
<body>
    <style>
        body {
            background: #242424;
            text-align: center;
        }
        h1, p {
            color: white;
            text-align: center;
            margin-bottom: 10px;
        }
        img {
            height: 200px;
        }
    </style>

    <h1>Sohayok</h1>
    <p>A Helping hand for teachers</p>

    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title" style="display: block; text-align: center"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator" style="display: block;"></ol>
    </div>


    <div id="links" class="links">
        @php( $i = 1 )
        @for(;$i<11; $i++)
            <a href="{!! asset("gallery/sohayok/".$i.".png") !!}"
               title="" data-gallery="">
                <img src="{!! asset("gallery/sohayok/".$i.".png") !!}">
            </a>
        @endfor
        {{--<a href="https://farm5.static.flickr.com/4765/39732630672_e228d042ef_b.jpg" title="Big Bird" data-gallery=""><img src="https://farm5.static.flickr.com/4765/39732630672_e228d042ef_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4611/39052075604_c5b21ff2b9_b.jpg" title="Its wild out there" data-gallery=""><img src="https://farm5.static.flickr.com/4611/39052075604_c5b21ff2b9_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4623/38866072405_a7e5cf69b2_b.jpg" title="Hvannadalshnjúkur, Öræfajökull" data-gallery=""><img src="https://farm5.static.flickr.com/4623/38866072405_a7e5cf69b2_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4710/39048900694_2831834e61_b.jpg" title="roja" data-gallery=""><img src="https://farm5.static.flickr.com/4710/39048900694_2831834e61_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4742/39056561754_1ecf2ff18c_b.jpg" title="Desert sand dunes in the Tibetan Himalayas, Tibet 2017" data-gallery=""><img src="https://farm5.static.flickr.com/4742/39056561754_1ecf2ff18c_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4671/27976024089_78e1d3ca4d_b.jpg" title="Spirits Over the River" data-gallery=""><img src="https://farm5.static.flickr.com/4671/27976024089_78e1d3ca4d_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4655/39764908101_6628d55a77_b.jpg" title="Evening Mood" data-gallery=""><img src="https://farm5.static.flickr.com/4655/39764908101_6628d55a77_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4656/39056269564_88f6875002_b.jpg" title="snow fall" data-gallery=""><img src="https://farm5.static.flickr.com/4656/39056269564_88f6875002_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4750/25893302768_91e91dd104_b.jpg" title="Fauvette pitchou" data-gallery=""><img src="https://farm5.static.flickr.com/4750/25893302768_91e91dd104_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4657/39759434481_09e6196374_b.jpg" title="When Lucifers accomplice is the only one sleeping in church.." data-gallery=""><img src="https://farm5.static.flickr.com/4657/39759434481_09e6196374_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4653/25896447708_db69d18406_b.jpg" title="Ice Tree" data-gallery=""><img src="https://farm5.static.flickr.com/4653/25896447708_db69d18406_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4748/27986099169_c7ffeec35f_b.jpg" title="boats" data-gallery=""><img src="https://farm5.static.flickr.com/4748/27986099169_c7ffeec35f_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4609/27986172579_272744c093_b.jpg" title="Death Valley Badlands" data-gallery=""><img src="https://farm5.static.flickr.com/4609/27986172579_272744c093_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4769/25893657078_79f34a6da7_b.jpg" title="Piovera" data-gallery=""><img src="https://farm5.static.flickr.com/4769/25893657078_79f34a6da7_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4752/27985247629_e0c5987489_b.jpg" title="Out of competition" data-gallery=""><img src="https://farm5.static.flickr.com/4752/27985247629_e0c5987489_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4608/39724372372_922fd669c3_b.jpg" title="Garmisch Partenkirchen" data-gallery=""><img src="https://farm5.static.flickr.com/4608/39724372372_922fd669c3_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4700/39054545624_7c82068d20_b.jpg" title="Port Coton" data-gallery=""><img src="https://farm5.static.flickr.com/4700/39054545624_7c82068d20_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4621/25894550768_ca932743fe_b.jpg" title="Gracchio alpino - Yellow-billed Chough" data-gallery=""><img src="https://farm5.static.flickr.com/4621/25894550768_ca932743fe_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4654/27980759979_8c5a04d2ba_b.jpg" title="Pic chevelu / Hairy Woodpecker" data-gallery=""><img src="https://farm5.static.flickr.com/4654/27980759979_8c5a04d2ba_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4674/39766675961_4cc4a6872b_b.jpg" title="Camion" data-gallery=""><img src="https://farm5.static.flickr.com/4674/39766675961_4cc4a6872b_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4764/39759785861_7a8d8c04dc_b.jpg" title="I believe I can fly!!! Explored 19-1-2018 #20" data-gallery=""><img src="https://farm5.static.flickr.com/4764/39759785861_7a8d8c04dc_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4611/25880582288_4f44108e6a_b.jpg" title="Northern Hawk Owl (Surnia ulula)" data-gallery=""><img src="https://farm5.static.flickr.com/4611/25880582288_4f44108e6a_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4653/39758158791_dfedd4e58a_b.jpg" title="Val di Fassa e le Dolomiti: il Gruppo del Sella" data-gallery=""><img src="https://farm5.static.flickr.com/4653/39758158791_dfedd4e58a_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4655/39049802444_1dfac25ed9_b.jpg" title="White Ibis" data-gallery=""><img src="https://farm5.static.flickr.com/4655/39049802444_1dfac25ed9_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4664/27981470579_41e80c1e35_b.jpg" title="Hoffnung auf Frühling - Hope For Spring" data-gallery=""><img src="https://farm5.static.flickr.com/4664/27981470579_41e80c1e35_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4752/39058041534_1bb345623e_b.jpg" title="Winter View" data-gallery=""><img src="https://farm5.static.flickr.com/4752/39058041534_1bb345623e_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4740/39734326752_aaa9276d48_b.jpg" title="_D2_4743.jpg" data-gallery=""><img src="https://farm5.static.flickr.com/4740/39734326752_aaa9276d48_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4702/27986348969_dea81533a0_b.jpg" title="66619 Departs Tunstead in a blizzard." data-gallery=""><img src="https://farm5.static.flickr.com/4702/27986348969_dea81533a0_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4748/25892071928_d44025df8a_b.jpg" title="My dark side" data-gallery=""><img src="https://farm5.static.flickr.com/4748/25892071928_d44025df8a_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4752/24887800817_e3eaaa6305_b.jpg" title="Amanecer colorido" data-gallery=""><img src="https://farm5.static.flickr.com/4752/24887800817_e3eaaa6305_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4614/24896317097_2b0549b6e1_b.jpg" title="berry picker" data-gallery=""><img src="https://farm5.static.flickr.com/4614/24896317097_2b0549b6e1_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4703/39730984852_c959e1f31e_b.jpg" title="Tranquil Path" data-gallery=""><img src="https://farm5.static.flickr.com/4703/39730984852_c959e1f31e_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4630/39049288564_83794bedf2_b.jpg" title="Heavens Gate" data-gallery=""><img src="https://farm5.static.flickr.com/4630/39049288564_83794bedf2_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4703/39057863954_d41f3bff55_b.jpg" title="Room for two" data-gallery=""><img src="https://farm5.static.flickr.com/4703/39057863954_d41f3bff55_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4700/24896185617_f9478ed260_b.jpg" title="Leopardo Panthera pardus" data-gallery=""><img src="https://farm5.static.flickr.com/4700/24896185617_f9478ed260_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4630/39058172204_5e7ffd4b53_b.jpg" title="Vuurjuffer - Pyrrhosoma nymphula" data-gallery=""><img src="https://farm5.static.flickr.com/4630/39058172204_5e7ffd4b53_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4740/38857703565_8d4de98462_b.jpg" title="encore une belle patrouille !" data-gallery=""><img src="https://farm5.static.flickr.com/4740/38857703565_8d4de98462_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4665/24895894707_3a310e3d53_b.jpg" title="Great Blue Heron Nest -Explored." data-gallery=""><img src="https://farm5.static.flickr.com/4665/24895894707_3a310e3d53_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4673/24895200937_d6ce2f9fd5_b.jpg" title="502201801dLUCCA-48-HDR" data-gallery=""><img src="https://farm5.static.flickr.com/4673/24895200937_d6ce2f9fd5_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4670/24892163937_b62dba9f9d_b.jpg" title="Twistlock for Faymonville MAX Trailer 200" data-gallery=""><img src="https://farm5.static.flickr.com/4670/24892163937_b62dba9f9d_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4631/27990604699_63b3708657_b.jpg" title="Lamberet upgrade(Link In comments)" data-gallery=""><img src="https://farm5.static.flickr.com/4631/27990604699_63b3708657_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4746/27983179299_792666bed3_b.jpg" title="Morning Flight" data-gallery=""><img src="https://farm5.static.flickr.com/4746/27983179299_792666bed3_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4764/24895374427_3ca87c1a02_b.jpg" title="At-M6 foot size comparrison" data-gallery=""><img src="https://farm5.static.flickr.com/4764/24895374427_3ca87c1a02_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4702/39055809314_6405577069_b.jpg" title="Stonechat" data-gallery=""><img src="https://farm5.static.flickr.com/4702/39055809314_6405577069_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4698/38863309085_fa1f694574_b.jpg" title="Canada Geese" data-gallery=""><img src="https://farm5.static.flickr.com/4698/38863309085_fa1f694574_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4718/38870411525_31dc2d3751_b.jpg" title=".. Chhath Puja..  Navadhi India" data-gallery=""><img src="https://farm5.static.flickr.com/4718/38870411525_31dc2d3751_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4602/38864420875_35e5f96a4f_b.jpg" title="Rafinesquia neomexicana &quot;desert chicory&quot;" data-gallery=""><img src="https://farm5.static.flickr.com/4602/38864420875_35e5f96a4f_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4767/39763661381_43cf70c497_b.jpg" title="Grapsus adscensionis  Tenerife 12-01-18 Ian W" data-gallery=""><img src="https://farm5.static.flickr.com/4767/39763661381_43cf70c497_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4769/38859766245_6bd614cb69_b.jpg" title="sandy" data-gallery=""><img src="https://farm5.static.flickr.com/4769/38859766245_6bd614cb69_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4631/27989922939_ac1e9dd779_b.jpg" title="Golden-naped Tanager. Tangara nuquirrufa. Tangara ruficervix." data-gallery=""><img src="https://farm5.static.flickr.com/4631/27989922939_ac1e9dd779_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4614/24897823037_287ae86676_b.jpg" title="Lake Burley Griffin, Canberra" data-gallery=""><img src="https://farm5.static.flickr.com/4614/24897823037_287ae86676_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4698/39757469261_7d2ef82181_b.jpg" title="Heute morgen im Garten" data-gallery=""><img src="https://farm5.static.flickr.com/4698/39757469261_7d2ef82181_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4612/39764121701_11a4b647e3_b.jpg" title="18/365 2018 Trebles For Show Doubles For Dough" data-gallery=""><img src="https://farm5.static.flickr.com/4612/39764121701_11a4b647e3_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4759/39735805132_4a27f460a8_b.jpg" title="Kånken" data-gallery=""><img src="https://farm5.static.flickr.com/4759/39735805132_4a27f460a8_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4752/27989209769_b7437df9c6_b.jpg" title="Zoz enjoying his morning walk" data-gallery=""><img src="https://farm5.static.flickr.com/4752/27989209769_b7437df9c6_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4769/27987354979_0eaa5cd1a3_b.jpg" title="Highland Stag" data-gallery=""><img src="https://farm5.static.flickr.com/4769/27987354979_0eaa5cd1a3_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4652/25887486298_9e12a3c4a2_b.jpg" title="Greenshank. (Explored)." data-gallery=""><img src="https://farm5.static.flickr.com/4652/25887486298_9e12a3c4a2_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4741/39046297604_2269f206b3_b.jpg" title="planet swirl" data-gallery=""><img src="https://farm5.static.flickr.com/4741/39046297604_2269f206b3_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4651/38864207125_60b4aa8b43_b.jpg" title="Blu (Explored)" data-gallery=""><img src="https://farm5.static.flickr.com/4651/38864207125_60b4aa8b43_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4694/38854631685_e2b91f0809_b.jpg" title="Belted Kingfisher" data-gallery=""><img src="https://farm5.static.flickr.com/4694/38854631685_e2b91f0809_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4758/25886232728_0f04e6e732_b.jpg" title="The Long Groyne mono (Explored)" data-gallery=""><img src="https://farm5.static.flickr.com/4758/25886232728_0f04e6e732_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4652/25882127538_264bc669cc_b.jpg" title="Panther Chameleon" data-gallery=""><img src="https://farm5.static.flickr.com/4652/25882127538_264bc669cc_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4698/39054449714_242df37a44_b.jpg" title="Anís del Mono" data-gallery=""><img src="https://farm5.static.flickr.com/4698/39054449714_242df37a44_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4609/39044480824_d8f920b591_b.jpg" title="Rise of the Empire: Chapter 2" data-gallery=""><img src="https://farm5.static.flickr.com/4609/39044480824_d8f920b591_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4762/38864022585_bbdb592abc_b.jpg" title="Killer croc" data-gallery=""><img src="https://farm5.static.flickr.com/4762/38864022585_bbdb592abc_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4669/24896083317_75d8024a7a_b.jpg" title="Racing Home" data-gallery=""><img src="https://farm5.static.flickr.com/4669/24896083317_75d8024a7a_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4694/39765022621_4d991fedf9_b.jpg" title="Veistoksellista - Sculptural element" data-gallery=""><img src="https://farm5.static.flickr.com/4694/39765022621_4d991fedf9_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4655/39732166612_c38ca8ccac_b.jpg" title="Lioness in sunset backlight!" data-gallery=""><img src="https://farm5.static.flickr.com/4655/39732166612_c38ca8ccac_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4753/39724175572_38456b9991_b.jpg" title="Foggy morning" data-gallery=""><img src="https://farm5.static.flickr.com/4753/39724175572_38456b9991_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4650/38867515105_c0fd6ddc7c_b.jpg" title="Over the wave (Explored)" data-gallery=""><img src="https://farm5.static.flickr.com/4650/38867515105_c0fd6ddc7c_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4768/25894018158_9488c04246_b.jpg" title="Illumination Instagram: @GLENNSTRYPSTEEN_PHOTOGRAPHY" data-gallery=""><img src="https://farm5.static.flickr.com/4768/25894018158_9488c04246_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4747/24893284867_3b8a74cd7b_b.jpg" title="T 478.3101, Jince" data-gallery=""><img src="https://farm5.static.flickr.com/4747/24893284867_3b8a74cd7b_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4658/27981532719_750b2cd58b_b.jpg" title="Reluctant Beginer" data-gallery=""><img src="https://farm5.static.flickr.com/4658/27981532719_750b2cd58b_s.jpg"></a>--}}
        {{--<a href="https://farm5.static.flickr.com/4605/39766073051_d9f7e89e0d_b.jpg" title="MEGARA" data-gallery=""><img src="https://farm5.static.flickr.com/4605/39766073051_d9f7e89e0d_s.jpg"></a>--}}
    </div>


    <script src="{!! asset('gallery/js/blueimp-gallery.min.js') !!}"></script>
    <script>
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>
</body>
</html>