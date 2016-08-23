<?php
get_header();
?>
<!--<div id="myModal" class="smodal">-->
<!--    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>-->
<!--    <img class="modal-content" id="img01">-->
<!--    <div id="caption"></div>-->
<!--</div>-->

<!--<div id="items">-->
<!--    <input class="search" placeholder="Поиск" />-->

<!--<ul class='list'>-->
<!--<link rel="stylesheet" type="text/css" href="\wp-content\themes\rusholod\alt.css">-->


<?php
/*  global $wpdb;
$results = $wpdb->get_results( 'SELECT * FROM instruments', OBJECT );

foreach ($results as $result){
    echo "<li>";
        echo "<h3 class=\"name\">";
    echo "<img src=\"$result->img\" class=\"img-preview\"  id=\"img_$result->id\"/>";

    echo $result->name;
        echo "</h3>";

        echo "<p>";
        echo $result->description;
        echo "</p>";

    echo "</li>";
}
*/
?>
<div class="myClass" style="line-height: 1; font-size: 8pt">

    <table style="text-align: left; width: 960px; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
        <tbody>
        <tr>
            <td colspan="7" rowspan="1" style="vertical-align: top; width: 129px; text-align: center; background-color: rgb(51, 102, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <big>Среднетемпературные компрессоры ASPERA EMBRACO&nbsp; на хладоне R134a</big><br>
                <br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; text-align: center; ">EMT 6160Z</td>
            <td colspan="6" rowspan="1" style="vertical-align: top; width: 129px; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С) :</td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; "><br></td>
            <td style="vertical-align: top; width: 118px; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; width: 131px; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; width: 117px; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; width: 129px; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top;  text-align: center;">

<!--                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
                <a href="#modal" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="modal" class="altmodal">
                    <div>
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            Danfoss (температура конденсации +55С)
                            <tr>
                                <td style="vertical-align: top; width: 63px; ">FR 8,5G<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-30<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">-23,3<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-5<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">0<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">5<br></td>
                                <td style="vertical-align: top; width: 37px; text-align: center; ">7.2<br></td>
                                <td style="vertical-align: top; width: 43px; text-align: center; ">10<br></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 63px; "><br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">84.9<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">123<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">138<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">171<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">228<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">298<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">381<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">478<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">592<br></td>
                                <td style="vertical-align: top; width: 37px; text-align: center; ">647<br></td>
                                <td style="vertical-align: top; width: 43px; text-align: center; ">722<br></td>
                            </tr>
                            </tbody>
                        </table><br>Cubigel

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; text-align: center; ">GL80TB<br></td>
                                <td style="vertical-align: top; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">-5<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">0<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">5<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">10<br></td>
                            </tr>

                            <tr>
                                <td style="vertical-align: top; width: 98px; text-align: center; ">T конд. 45С<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">145<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">201<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">268<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">347<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">437<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">539<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">653<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">778<br></td>
                            </tr>

                            <tr>
                                <td style="vertical-align: top; width: 98px; text-align: center; ">T конд. 55С</td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">111<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">156<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">212<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">280<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">360<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">451<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">554<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">668<br></td>
                            </tr>
                            </tbody>
                        </table>

                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>

                <br>
            </td>
            <td style="vertical-align: top; width: 118px; text-align: center; ">303<br></td>
            <td style="vertical-align: top; width: 131px; text-align: center; ">383<br></td>
            <td style="vertical-align: top; width: 117px; text-align: center; ">477<br></td>
            <td style="vertical-align: top; width: 129px; text-align: center; ">586<br></td>
            <td style="vertical-align: top; text-align: center; ">708<br></td>
            <td style="vertical-align: top; text-align: center; ">845<br></td>
        </tr><tr>
            <td colspan="7" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NEK 6187Z<br>
            </td>
            <td colspan="6" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С): </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top;  text-align: center;">


                <a href="#nek6187z" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>

                <div id="nek6187z" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div><br>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">SC10GHH</td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-15<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-10<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-5<br></td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">0<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">5<br></td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">10<br></td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">15<br></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">259<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">352<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">467<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">604<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">762<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">942<br>
                                </td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">1144<br>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <br>Cubigel

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; text-align: center; ">GP12TB<br></td>
                                <td style="vertical-align: top; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">-5<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">0<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">5<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">10<br></td>
                            </tr>

                            <tr>
                                <td style="vertical-align: top; width: 98px; text-align: center; ">T конд. 45С<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">229<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">327<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">443<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">577<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">729<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">900<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">1089<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">1295<br></td>
                            </tr>

                            <tr>
                                <td style="vertical-align: top; width: 98px; text-align: center; ">T конд. 55С</td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">169<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">245<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">338<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">450<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">579<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">727<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">893<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">1078<br></td>
                            </tr>
                            </tbody>
                        </table><br> Tecumseh

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">AE4440Y</td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-15<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-10<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-5<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">0<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">5<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">10<br>
                                </td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">15<br>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">369<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">471<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">591<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">733<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">899<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">1093<br>
                                </td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">1317<br>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>




                <br>
            </td>
            <td style="vertical-align: top; text-align: center; ">410<br></td>
            <td style="vertical-align: top; text-align: center; ">523<br></td>
            <td style="vertical-align: top; text-align: center; ">662<br></td>
            <td style="vertical-align: top; text-align: center; ">826<br></td>
            <td style="vertical-align: top; text-align: center; ">1016<br></td>
            <td style="vertical-align: top; text-align: center; ">1231<br></td>
        </tr>
        <tr>
            <td colspan="7" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NEK 6212Z<br>
            </td>
            <td colspan="6" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С)</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center">

                <a href="#nek6212z" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <br>

                <div id="nek6212z" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2"><tbody><tr><td style="vertical-align: top; width: 63px;  text-align: center;">SC12G<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-23.3<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">-5<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">0<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">5<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">7.2<br></td>
                                <td style="vertical-align: top; width: 37px; text-align: center; ">10<br></td>
                                <td style="vertical-align: top; width: 43px; text-align: center; ">15<br></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 63px; "><br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">224<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">255<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">322<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">440<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">579<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">737<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">915<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">1113<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">1206<br></td>
                                <td style="vertical-align: top; width: 37px; text-align: center; ">1330<br></td>
                                <td style="vertical-align: top; width: 43px; text-align: center; ">1565<br></td>
                            </tr>
                            </tbody>
                        </table>
                        <br>Cubigel (температура конденсации +45С)
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">GP16TB<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-15<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-10<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-5<br></td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">0<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">5<br></td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">10<br></td>

                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">561<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">739<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">942<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">1172<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">1428<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">1710<br>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                        <br> Tecumseh (температура конденсации +54.5С)
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">CAE4448Y</td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-25<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-15<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-10<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">-5<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">0<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">7.2<br>
                                </td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">15<br>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">344<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">403<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">530<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">693<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">892<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">1242<br>
                                </td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">1705<br>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>



            </td>
            <td style="vertical-align: top; text-align: center; ">569<br></td>
            <td style="vertical-align: top; text-align: center; ">723<br></td>
            <td style="vertical-align: top; text-align: center; ">908<br></td>
            <td style="vertical-align: top; text-align: center; ">1122<br></td>
            <td style="vertical-align: top; text-align: center; ">1367<br></td>
            <td style="vertical-align: top; text-align: center; ">1642<br></td>
        </tr>


        </tbody>
    </table>
    <br>
    <br>
    <table style="text-align: left; width: 960px; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

        <tbody>
        <tr>
            <td colspan="7" rowspan="1" style="vertical-align: top; width: 129px; text-align: center; background-color: rgb(51, 51, 153);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <big>Низкотемпературные компрессоры ASPERA EMBRACO&nbsp; на хладоне R134a</big><br>
                <br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NE 2121Z<br>
            </td>
            <td colspan="6" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br></td>
            <td style="vertical-align: top; text-align: center; ">-35<br></td>
            <td style="vertical-align: top; text-align: center; ">-30<br></td>
            <td style="vertical-align: top; text-align: center; ">-25<br></td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">

                <a href="#ne2121z" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>

                <div id="ne2121z" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">NL11F<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-35<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-30<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-25<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">-23.3<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-20<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">-15<br>
                                </td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">-10<br>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">102<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">144<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">200<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">223<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">271<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">356<br>
                                </td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">455<br>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <br>Cubigel
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; text-align: center; ">GP14TB<br></td>
                                <td style="vertical-align: top; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">-5<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">0<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">5<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">10<br></td>
                            </tr>

                            <tr>
                                <td style="vertical-align: top; width: 98px; text-align: center; ">T конд. 45С<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">250<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">353<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">477<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">622<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">790<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">978<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">1189<br></td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">1421<br></td>
                            </tr>

                            <tr>
                                <td style="vertical-align: top; width: 98px; text-align: center; ">T конд. 55С</td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">191<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">271<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">373<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">497<br></td>
                                <td style="vertical-align: top; width: 53px; text-align: center; ">643<br></td>
                                <td style="vertical-align: top; width: 56px; text-align: center; ">810<br></td>
                                <td style="vertical-align: top; width: 63px; text-align: center; ">999<br>
                                </td>
                                <td style="vertical-align: top; width: 60px; text-align: center; ">1209<br></td>
                            </tr>
                            </tbody>
                        </table>

                        <br> Tecumseh (температура конденсации +50С)
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">AEZ1380Y<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-40<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-35<br>
                                </td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">-30<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-25<br>
                                </td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">-23.3<br>
                                </td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">-20<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-15<br>
                                </td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">-10<br>
                                </td>



                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 63px; "><br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">58.8<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">105<br>
                                </td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">158<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">217<br>
                                </td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">239<br>
                                </td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">283<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">354<br>
                                </td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">432<br>
                                </td>



                            </tr>
                            </tbody>
                        </table>

                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>


            </td>
            <td style="vertical-align: top; text-align: center; ">138<br></td>
            <td style="vertical-align: top; text-align: center; ">183<br></td>
            <td style="vertical-align: top; text-align: center; ">243<br></td>
            <td style="vertical-align: top; text-align: center; ">319<br></td>
            <td style="vertical-align: top; text-align: center; ">412<br></td>
            <td style="vertical-align: top; text-align: center; ">520<br></td>
        </tr>
        <tr>
            <td colspan="7" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; text-align: center; ">NE 2130Z</td>
            <td colspan="6" rowspan="1" style="vertical-align: top; width: 129px; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С) :</td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; "><br>      </td>
            <td style="vertical-align: top; width: 118px; text-align: center; ">-35<br></td>
            <td style="vertical-align: top; width: 131px; text-align: center; ">-30<br></td>
            <td style="vertical-align: top; width: 117px; text-align: center; ">-25<br></td>
            <td style="vertical-align: top; width: 129px; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">

                <a href="#ne2130z" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>

                <div id="ne2130z" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div>
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">SC21F<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-35<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-30<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-25<br></td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">-20<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-15<br></td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">-10</td><td style="vertical-align: top; width: 70px;  text-align: center;">-5</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">185<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">245<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">335<br></td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">455<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">610<br></td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">780<br></td>
                                <td style="vertical-align: top; width: 70px;  text-align: center;">990<br></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>

            </td>
            <td style="vertical-align: top; width: 118px; text-align: center; ">195<br></td>
            <td style="vertical-align: top; width: 131px; text-align: center; ">254<br></td>
            <td style="vertical-align: top; width: 117px; text-align: center; ">333<br></td>
            <td style="vertical-align: top; width: 129px; text-align: center; ">431<br></td>
            <td style="vertical-align: top; text-align: center; ">549<br></td>
            <td style="vertical-align: top; text-align: center; ">686<br>
            </td>
        </tr><tr>
            <td colspan="7" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NE2134Z<br>
            </td>
            <td colspan="6" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С): </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br></td>
            <td style="vertical-align: top; text-align: center; ">-35<br></td>
            <td style="vertical-align: top; text-align: center; ">-30<br></td>
            <td style="vertical-align: top; text-align: center; ">-25<br></td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">

                <a href="#ne2130z" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
            </td>
            <td style="vertical-align: top; text-align: center; ">189<br></td>
            <td style="vertical-align: top; text-align: center; ">261<br></td>
            <td style="vertical-align: top; text-align: center; ">350<br></td>
            <td style="vertical-align: top; text-align: center; ">458<br></td>
            <td style="vertical-align: top; text-align: center; ">588<br></td>
            <td style="vertical-align: top; text-align: center; ">741<br></td>
        </tr>


        </tbody>
    </table>

    <br>

    <br>

    <table style="text-align: left; width: 960px; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

        <tbody>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top; width: 104px; text-align: center; background-color: rgb(255, 153, 0);"><big>&nbsp;&nbsp;&nbsp;&nbsp; Среднетемпературные компрессоры ASPERA EMBRACO на хладоне R404a<br>
                    <br>
                </big></td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; text-align: center; ">NEK 6168GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; width: 104px; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; "><br>
            </td>
            <td style="vertical-align: top; width: 121px; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; width: 99px; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; width: 103px; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; width: 105px; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; width: 104px; text-align: center; ">0<br></td>
            <td style="vertical-align: top; width: 102px; text-align: center; ">5<br></td>
            <td style="vertical-align: top; width: 94px; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">534<br></td>
            <td style="vertical-align: top; text-align: center; ">657<br></td>
            <td style="vertical-align: top; text-align: center; ">812<br></td>
            <td style="vertical-align: top; width: 105px; text-align: center; ">996<br></td>
            <td style="vertical-align: top; width: 104px; text-align: center; ">1206<br></td>
            <td style="vertical-align: top; text-align: center; ">1437<br></td>
            <td style="vertical-align: top; text-align: center; ">1686<br></td>
        </tr><tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NEK 6210GK<br></td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br></td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>


            <td style="vertical-align: top; text-align: center;">
                <a href="#nek6210gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nek6210gk" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +45С)</div>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">SC10 MLX<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-20<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-15<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-10<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">-5<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">0<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">5</td>

                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">546<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">687<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">855<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">1051<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">1278<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">1537<br>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>
            </td>
            <td style="vertical-align: top; text-align: center; ">563<br></td>
            <td style="vertical-align: top; text-align: center; ">674<br></td>
            <td style="vertical-align: top; text-align: center; ">817<br></td>
            <td style="vertical-align: top; text-align: center; ">991<br></td>
            <td style="vertical-align: top; text-align: center; ">1197<br></td>
            <td style="vertical-align: top; text-align: center; ">1434<br></td>
            <td style="vertical-align: top; text-align: center; ">1703<br></td>
        </tr>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NT 6220GK<br></td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br></td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">
                <a href="#nek6220gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nek6220gk" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div> <br>
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">


                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">SC12DL<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-20<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-15<br>
                                </td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">-10<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-5<br>
                                </td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">0<br>
                                </td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">5<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">10<br>
                                </td>




                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 63px; "><br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">565<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">738<br>
                                </td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">942<br>
                                </td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">1176<br>
                                </td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">1440<br>
                                </td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">1734<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">2058<br>
                                </td>




                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>
            </td>
            <td style="vertical-align: top; text-align: center; ">680<br></td>
            <td style="vertical-align: top; text-align: center; ">869<br></td>
            <td style="vertical-align: top; text-align: center; ">1096<br></td>
            <td style="vertical-align: top; text-align: center; ">1359<br></td>
            <td style="vertical-align: top; text-align: center; ">1657<br></td>
            <td style="vertical-align: top; text-align: center; ">1989<br></td>
            <td style="vertical-align: top; text-align: center; ">2356<br></td>
        </tr>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NT 6222GK<br></td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">
                <a href="#nek6222gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nek6222gk" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div> <br>


                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">SC15DL<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-5<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">0<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">5<br> </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">10<br></td>

                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 63px; "><br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">683<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">903<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">1151<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">1427<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">1731<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">2062<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">2421<br></td>




                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>

            </td>
            <td style="vertical-align: top; text-align: center; ">810<br></td>
            <td style="vertical-align: top; text-align: center; ">1035<br></td>
            <td style="vertical-align: top; text-align: center; ">1307<br></td>
            <td style="vertical-align: top; text-align: center; ">1629<br></td>
            <td style="vertical-align: top; text-align: center; ">1992<br></td>
            <td style="vertical-align: top; text-align: center; ">2389<br></td>
            <td style="vertical-align: top; text-align: center; ">2814<br></td>
        </tr>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NEK 6217GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br> </td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">875<br></td>
            <td style="vertical-align: top; text-align: center; ">1076<br></td>
            <td style="vertical-align: top; text-align: center; ">1315<br></td>
            <td style="vertical-align: top; text-align: center; ">1594<br></td>
            <td style="vertical-align: top; text-align: center; ">1913<br></td>
            <td style="vertical-align: top; text-align: center; ">2270<br></td>
            <td style="vertical-align: top; text-align: center; ">2667<br></td>
        </tr><tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NJ 9226GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
            <td style="vertical-align: top; text-align: center; ">-5<br></td>
            <td style="vertical-align: top; text-align: center; ">0<br></td>
            <td style="vertical-align: top; text-align: center; ">5<br></td>
            <td style="vertical-align: top; text-align: center; ">10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">

                <a href="#nj9226gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nj9226gk" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">GS 21MLX<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-20<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-15<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-10<br></td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">-5<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">0<br></td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">5</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">1140<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">1425<br></td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">1770<br></td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">2170<br></td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">2630<br></td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">3160<br></td>

                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>
            </td>
            <td style="vertical-align: top; text-align: center; ">982<br></td>
            <td style="vertical-align: top; text-align: center; ">1285<br></td>
            <td style="vertical-align: top; text-align: center; ">1648<br></td>
            <td style="vertical-align: top; text-align: center; ">2066<br></td>
            <td style="vertical-align: top; text-align: center; ">2536<br></td>
            <td style="vertical-align: top; text-align: center; ">3055<br></td>
            <td style="vertical-align: top; text-align: center; ">3618<br></td>
        </tr>


        </tbody>
    </table>

    <br>

    <br>
    <table style="text-align: left; width: 960px; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
        <tbody>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top; width: 104px; text-align: center; background-color: rgb(153, 51, 0);"><big>&nbsp;&nbsp;&nbsp;&nbsp; Низкотемпературные компрессоры ASPERA EMBRACO на хладоне R404a<br>
                    <br>
                </big></td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; text-align: center; ">NEK 2125GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; width: 104px; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; "><br></td>
            <td style="vertical-align: top; width: 121px; text-align: center; ">-40<br></td>
            <td style="vertical-align: top; width: 99px; text-align: center; ">-35<br></td>
            <td style="vertical-align: top; width: 103px; text-align: center; ">-30<br></td>
            <td style="vertical-align: top; width: 105px; text-align: center; ">-25<br></td>
            <td style="vertical-align: top; width: 104px; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; width: 102px; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; width: 94px; text-align: center; ">-10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">
                <a href="#nek2125gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nek2125gk" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +55С)</div>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 70px; text-align: center; ">FR8.5CL<br></td>
                                <td style="vertical-align: top; width: 57px; text-align: center; ">-45<br></td>
                                <td style="vertical-align: top; width: 54px; text-align: center; ">-40<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">-35<br></td>
                                <td style="vertical-align: top; width: 52px; text-align: center; ">-30<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-23.3<br></td>
                                <td style="vertical-align: top; width: 58px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">-10<br></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 70px; "><br></td>
                                <td style="vertical-align: top; width: 57px; text-align: center; ">115<br></td>
                                <td style="vertical-align: top; width: 54px; text-align: center; ">147<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">195<br></td>
                                <td style="vertical-align: top; width: 52px; text-align: center; ">259<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">338<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">369<br></td>
                                <td style="vertical-align: top; width: 58px; text-align: center; ">434<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">546<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">674<br></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>



            </td>
            <td style="vertical-align: top; text-align: center; ">145</td>
            <td style="vertical-align: top; text-align: center; ">195<br></td>
            <td style="vertical-align: top; text-align: center; ">258<br></td>
            <td style="vertical-align: top; width: 105px; text-align: center; ">335<br></td>
            <td style="vertical-align: top; width: 104px; text-align: center; ">426<br></td>
            <td style="vertical-align: top; text-align: center; ">530<br></td>
            <td style="vertical-align: top; text-align: center; ">648<br></td>
        </tr><tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NEK 2150GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br></td>
            <td style="vertical-align: top; text-align: center; ">-40<br></td>
            <td style="vertical-align: top; text-align: center; ">-35<br></td>
            <td style="vertical-align: top; text-align: center; ">-30<br></td>
            <td style="vertical-align: top; text-align: center; ">-25<br></td>
            <td style="vertical-align: top; text-align: center; ">-20<br></td>
            <td style="vertical-align: top; text-align: center; ">-15<br></td>
            <td style="vertical-align: top; text-align: center; ">-10<br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">




                <a href="#nek2150gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nek2150gk" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +45С)</div><br>
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;text-align: center;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 63px; ">SC12CL<br>
                                </td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-45<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-40<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">-35<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-30<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">-23.3<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 37px; text-align: center; ">-6.7<br></td>
                                <td style="vertical-align: top; width: 43px; text-align: center; ">-5<br></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 63px; "><br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">67<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">162<br></td>
                                <td style="vertical-align: top; width: 39px; text-align: center; ">275<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">410<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">568<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">629<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">754<br></td>
                                <td style="vertical-align: top; width: 38px; text-align: center; ">971<br></td>
                                <td style="vertical-align: top; width: 42px; text-align: center; ">1220<br></td>
                                <td style="vertical-align: top; width: 37px; text-align: center; ">1404<br></td>
                                <td style="vertical-align: top; width: 43px; text-align: center; ">1505<br></td>
                            </tr>
                            </tbody>
                        </table>

                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>





            </td>
            <td style="vertical-align: top; text-align: center; ">234<br></td>
            <td style="vertical-align: top; text-align: center; ">314<br></td>
            <td style="vertical-align: top; text-align: center; ">410<br></td>
            <td style="vertical-align: top; text-align: center; ">523<br></td>
            <td style="vertical-align: top; text-align: center; ">657<br></td>
            <td style="vertical-align: top; text-align: center; ">814<br></td>
            <td style="vertical-align: top; text-align: center; ">994<br></td>
        </tr>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NT2180GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-40<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-35<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">
                <a href="#nek2180gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nek2180gk" class="altmodal">
                    <div>
                        <div class="text">Danfoss (температура конденсации +45С)</div>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 70px; text-align: center; ">SC18CLX.2<br></td>
                                <td style="vertical-align: top; width: 57px; text-align: center; ">-45<br></td>
                                <td style="vertical-align: top; width: 54px; text-align: center; ">-40<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">-35<br></td>
                                <td style="vertical-align: top; width: 52px; text-align: center; ">-30<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">-23.3<br></td>
                                <td style="vertical-align: top; width: 58px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">-10<br></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 70px; "><br></td>
                                <td style="vertical-align: top; width: 57px; text-align: center; ">225<br></td>
                                <td style="vertical-align: top; width: 54px; text-align: center; ">355<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">508<br></td>
                                <td style="vertical-align: top; width: 52px; text-align: center; ">691<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">905<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">986<br></td>
                                <td style="vertical-align: top; width: 58px; text-align: center; ">1156<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">1447<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">1783<br></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>





            </td>
            <td style="vertical-align: top; text-align: center; ">339<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">468<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">625<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">814<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1034<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1287<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1574<br>
            </td>
        </tr>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NJ2192GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br></td>
            <td style="vertical-align: top; text-align: center; ">-40<br></td>
            <td style="vertical-align: top; text-align: center; ">-35<br></td>
            <td style="vertical-align: top; text-align: center; ">-30<br> </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; ">


                <br>
            </td>
            <td style="vertical-align: top; text-align: center; ">385<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">677<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">996<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1351<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1748<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">2197<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">2706<br>
            </td>
        </tr>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NJ2212GK<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-40<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-35<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">
                <a href="#nj2212gk" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <br>
                <div id="nj2212gk" class="altmodal">
                    <div>

                        Tecumseh (температура конденсации +54.5С)
                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;">GS26CLX</td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-45<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-40<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">-35<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">-30<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">-25<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">-20<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">-15<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">-10<br>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 84px;  text-align: center;"><br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">325<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">497<br>
                                </td>
                                <td style="vertical-align: top; width: 69px;  text-align: center;">703<br>
                                </td>
                                <td style="vertical-align: top; width: 63px;  text-align: center;">949<br>
                                </td>
                                <td style="vertical-align: top; width: 65px;  text-align: center;">1240<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">1580<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">1974<br>
                                </td>
                                <td style="vertical-align: top; width: 59px;  text-align: center;">2427<br>
                                </td>


                            </tr>
                            </tbody>
                        </table>

                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>




            </td>
            <td style="vertical-align: top; text-align: center; ">506<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">806<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1162<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1580<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">2065<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">2620<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">3251<br>
            </td>
        </tr>

        </tbody>
    </table>
    <br>
    <br>
    <br>

    <table style="text-align: left; width: 960px; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">

        <tbody>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top; width: 104px; text-align: center; background-color: rgb(0, 204, 102);;"><big>&nbsp;&nbsp;&nbsp;&nbsp; Среднетемпературные компрессоры ASPERA EMBRACO на хладоне R22<br>
                    <br>
                </big></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NJ9226E<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top;  text-align: center;">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-5<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">0<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">5<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center;">

                <a href="#nj9226e" class="openModal"><span style="font-style: italic; color: red ;">аналог</span></a>
                <div id="nj9226e" class="altmodal">
                    <div>
                        <div class="text">Cubigel (температура конденсации +45С)</div><br>

                        <table style="text-align: left;  margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
                            <tbody>
                            <tr>
                                <td style="vertical-align: top; width: 70px; text-align: center; ">S22TN<br></td>
                                <td style="vertical-align: top; width: 57px; text-align: center; ">-25<br></td>
                                <td style="vertical-align: top; width: 54px; text-align: center; ">-20<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">-15<br></td>
                                <td style="vertical-align: top; width: 52px; text-align: center; ">-10<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">-5<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">0<br></td>
                                <td style="vertical-align: top; width: 58px; text-align: center; ">5<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">7.2<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">10<br></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 70px; "><br></td>
                                <td style="vertical-align: top; width: 57px; text-align: center; ">647<br></td>
                                <td style="vertical-align: top; width: 54px; text-align: center; ">912<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">1241<br></td>
                                <td style="vertical-align: top; width: 52px; text-align: center; ">1634<br></td>
                                <td style="vertical-align: top; width: 51px; text-align: center; ">2092<br></td>
                                <td style="vertical-align: top; width: 48px; text-align: center; ">2613<br></td>
                                <td style="vertical-align: top; width: 58px; text-align: center; ">3199<br></td>
                                <td style="vertical-align: top; width: 45px; text-align: center; ">3477<br></td>
                                <td style="vertical-align: top; width: 50px; text-align: center; ">3849<br></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#close" title="Закрыть"> </a>
                    </div>
                </div>


                <br>
            </td>
            <td style="vertical-align: top; text-align: center; ">970<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1278<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1651<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">2091<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">2598<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">3171<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">3810<br>
            </td>
        </tr>
        <tr>
            <td colspan="8" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; text-align: center; ">NJ 9232E<br>
            </td>
            <td colspan="7" rowspan="1" style="vertical-align: top; width: 104px; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 196px; "><br>
            </td>
            <td style="vertical-align: top; width: 121px; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; width: 99px; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; width: 103px; text-align: center; ">-10<br>
            </td>
            <td style="vertical-align: top; width: 105px; text-align: center; ">-5<br>
            </td>
            <td style="vertical-align: top; width: 104px; text-align: center; ">0<br>
            </td>
            <td style="vertical-align: top; width: 102px; text-align: center; ">5<br>
            </td>
            <td style="vertical-align: top; width: 94px; text-align: center; ">10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1173</td>
            <td style="vertical-align: top; text-align: center; ">1529<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1935<br>
            </td>
            <td style="vertical-align: top; width: 105px; text-align: center; ">2404<br>
            </td>
            <td style="vertical-align: top; width: 104px; text-align: center; ">2951<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">3590<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">4336<br>
            </td>
        </tr>

        </tbody>
    </table>

    <br>

    <br>
    <table style="text-align: left; width: 960px; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
        <tbody>
        <tr>
            <td colspan="6" rowspan="1" style="vertical-align: top; width: 190px; text-align: center; background-color: rgb(0, 128, 0);"><big>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Низкотемпературные компрессоры ASPERA EMBRACO на хладоне R22<br>
                    <br>
                </big></td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 197px; text-align: center; ">NE 2125E<br>
            </td>
            <td colspan="5" rowspan="1" style="vertical-align: top; width: 190px; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 197px; "><br>
            </td>
            <td style="vertical-align: top; width: 190px; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; width: 126px; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; width: 126px; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; width: 146px; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; width: 147px; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 197px; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; width: 190px; ">226<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">305<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">402<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">518<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">653<br>
            </td>
        </tr>
        <tr>
            <td colspan="6" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NE 2134E</td>
            <td colspan="5" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">323<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">425<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">557<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">717<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">907<br>
            </td>
        </tr><tr>
            <td colspan="6" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">T2140E<br>
            </td>
            <td colspan="5" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">349<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">483<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">656<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">868<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1119<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">T2155E<br>
            </td>
            <td colspan="5" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">436<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">589<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">790<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1036<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1325<br>
            </td>
        </tr>
        <tr>
            <td colspan="6" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">T2168E<br>
            </td>
            <td colspan="5" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">549<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">726<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">965<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1265<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1626<br>
            </td>
        </tr><tr>
            <td colspan="6" rowspan="1" style="vertical-align: top;"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: center; ">NJ 2178E<br>
            </td>
            <td colspan="5" rowspan="1" style="vertical-align: top; text-align: center; ">Мощность в Вт при температуре ( температура конденсации 45С):</td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-30<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-25<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-20<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-15<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">-10<br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; "><br>
            </td>
            <td style="vertical-align: top; text-align: center; ">793<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1058<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1385<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">1774<br>
            </td>
            <td style="vertical-align: top; text-align: center; ">2227<br>
            </td>
        </tr>


        </tbody>
    </table>
    <br>
    <br>
    <br>



<style>
    /* Слой перекрытия */
    .altmodal
    {
        position:fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        background:rgba(0,0,0,.5);
        z-index:9;
        /* Трансформации прозрачности при открытии */
        transition:opacity 511ms ease-in;
        /*Скрываем изначально*/
        opacity:0;pointer-events:none
    }

    /* Показываем модальное окно */
    .altmodal:target
    {
        opacity:1;pointer-events:auto
    }
    /* Содержание */
    .altmodal>div{
        width:611px;
        background:#fff;position:relative;margin:9% auto;
        /*По умолчанию минимизируем анимацию*/
        -webkit-animation:minimise 511ms linear;
        /*Придаем хороший вид*/
        padding:31px;
        border-radius:7px;box-shadow:0 3px 9px #000;
        /*text-shadow:0 1px 0 #fff;*/
    }
    /*Изменяем анимацию при открытии модального окна*/
    .altmodal:target>div{
        -webkit-animation-name:bounce
    }
    .altmodal h2{
        font-size:35px;padding:0 0 9px;
    }
    @-webkit-keyframes bounce{0%{-webkit-transform:scale3d(.1,.1,1);
        -webkit-box-shadow:0 3px 9px #000}55%{-webkit-transform:scale3d(1,1,1);
                                              -webkit-box-shadow:0 9px 9px #000}75%{-webkit-transform:scale3d(1,1,1);
                                                                                    -webkit-box-shadow:0 0 9px #000}100%{-webkit-transform:scale3d(1,1,1);
                                                                                                                        -webkit-box-shadow:0 3px 9px #000}}
    @-webkit-keyframes minimise{0%{-webkit-transform:scale3d(1,1,1)}100%{-webkit-transform:scale3d(.1,.1,1)}}
    /*Ссылка на кнопку Закрыть*/
    .altmodal a[href="#close"]{position:absolute;right:0;top:0;color:transparent}
    /*Сбрасываем изменения*/
    .altmodal a[href="#close"]:focus{outline:none}
    /*Создаем кнопку Закрыть*/
    .altmodal a[href="#close"]:after{content:'X';display:block;
        /*Позиционируем*/
        position:absolute;right:-9px;top:-9px;width:19px;padding:1px;
        /*Стили*/
        text-decoration:none;
        text-shadow:none;
        text-align:center;
        font-weight:bold;
        background:#000;
        color:#fff;
        border:3px solid #fff;
        border-radius:19px;
        box-shadow:0 1px 3px #000
    }
    .altmodal a[href="#close"]:focus:after,.altmodal a[href="#close"]:hover:after{-webkit-transform:scale(1.1,1.1);
        -moz-transform:scale(1.1,1.1);
    }
    .altmodal a[href="#close"]:focus:after{outline:0 solid #000}
    /*Открываем модальное окно*/a.openModal{}
    a.openModal:hover,a.openModal:focus{}
    .altmodal .modal_title{display:block;text-align:center;font-size:19pt}
</style>


    </div>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>-->


<!--<script>-->
<!--    var options = {-->
<!--        valueNames: [ 'name' ]-->
<!--    };-->
<!---->
<!--    var userList = new List('items', options);-->
<!---->
<!--    jQuery( document ).ready(function() {-->
<!--        var modal = document.getElementById('myModal');-->
<!--        var modalImg = document.getElementById("img01");-->
<!--        // Get the <span> element that closes the modal-->
<!--        var span = document.getElementsByClassName("close")[0];-->
<!--        // When the user clicks on <span> (x), close the modal-->
<!--        span.onclick = function() {-->
<!--            modal.style.display = "none";-->
<!--        };-->
<!--        jQuery('.img-preview').click(function () {-->
<!--            modal.style.display = "block";-->
<!--            modalImg.src = this.src;-->
<!--            modalImg.alt = this.alt;-->
<!--        });-->
<!--    });-->
<!--</script>-->



<?php
get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>


