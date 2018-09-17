<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div class="box box-solid">
        <div class="box-body  ">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2 "><?=$page_title?></label>
                    <!--        <label>Select</label>-->
                    <div class="col-md-3 ">
                        <select class="form-control">
                            <option>이메일</option>
                            <option>id</option>
                        </select>
                    </div>
                    <div class="col-md-5 ">
                        <input type="text" class="form-control" >
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default">검색</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th style="width: 5%">번호</th>
                    <th style="width: 15%">이메일</th>
                    <th style="width: 10%">아이디</th>

                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe@gmail.com</td>
                    <td>11-7-2014</td>

                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe@gmail.com</td>
                    <td>11-7-2014</td>

                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe@gmail.com</td>
                    <td>11-7-2014</td>

                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe@gmail.com</td>
                    <td>11-7-2014</td>

                </tr>
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            <div class="text-center">
                <ul class="pagination pagination-sm pagination-centered">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>

