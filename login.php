<?php
//$username = $_POST['username'];
//echo "$username";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <!--    <script src="js/vue.min.js"></script>-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.md5.js"></script>
    <title>Document</title>
    <style>
        .navbar-default-revise{background-color: rgba(64,158,255,1);}
        .navbar-default-revise .collapse-margin{margin: 0 35px;font-size: 18px;}
        .navbar-default-revise a{color: #fff;}
        .alert-z-index{position:relative;text-align: center;width: 160px;margin-left: 50%}
        .center-mess{margin: 0px 20px;}
        .center-mess_1{margin-bottom:15px;}
        .text{line-height: 40px;font-size:14px;color:#606266;margin-bottom: 22px;font-weight: 700; }
        #rotate:focus{outline: none;animation: rotatefresh 3s;}
        #rotate{outline: none;animation: rotatefresh 3s;}
        #rotate:active{animation: none; background:'#eee';}
        @keyframes rotatefresh {
            from { transform: rotate(0deg) }
            to {
                transform: rotate(360deg);
                transition: all 0.6s;
            }
        }
        .el-pagination{margin:15px 0px;float: right}
    </style>
</head>
<body>
<!--        页面头部-->
<div id="firstpage">
    <div class="header">
        <nav class="navbar  navbar-default-revise nav-z-index">
            <div class="collapse navbar-collapse collapse-margin">
                <ul class="nav  navbar-nav">
                    <li class="active"><a href="#">留言板</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#exampleModallogin">
                            登陆
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#exampleModalrevise">
                            注册
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--        登陆页面模态款-->
        <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">欢迎登录</h4>
                    </div>
                    <div class="modal-body">
                        <el-form action="1.php" method="POST" :label-position="labelPosition" label-width="80px">
                            <el-form-item label="账户">
                                <el-input id="username"  v-model="username"></el-input>
                            </el-form-item>
                            <el-form-item label="密码">
                                <el-input id="password" v-model="password"></el-input>
                            </el-form-item>
                            <el-form-item>
                                <el-button type="primary" @click="goinlogin()">提交</el-button>
                                <el-button @click="resetForm()">重置</el-button>
                            </el-form-item>
                        </el-form>
                    </div>
                </div>
            </div>
        </div>


        <!--        注册页面模态款-->
        <div class="modal fade" id="exampleModalrevise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">注册页面</h4>
                    </div>
                    <div class="modal-body">
                        <el-form action="revise.php" method="POST" :label-position="labelPosition" label-width="80px">
                            <el-form-item label="账户">
                                <el-input id="user"  v-model="user"></el-input>
                            </el-form-item>
                            <el-form-item label="姓名">
                                <el-input id="name"  v-model="name"></el-input>
                            </el-form-item>
                            <el-form-item label="密码">
                                <el-input id="pass" v-model="pass"></el-input>
                            </el-form-item>
                            <el-form-item label="确认密码">
                                <el-input id="password1" v-model="password1"></el-input>
                            </el-form-item>
                            <el-form-item>
                                <el-button type="primary" @click="goinrevise()">注册</el-button>
                                <el-button @click="resetForm()">重置</el-button>
                            </el-form-item>
                        </el-form>
                    </div>
                </div>
            </div>
        </div>


    </div>




    <div class="center-mess" id="center-mess">
        <!--网页留言部分以及用户信息部分-->
        <div class="center-mess_1">
            <div class="row">
                <!--                  留言模块-->
                <div class="col-md-8">
                    <el-card class="box-card">
                        <div slot="header" class="clearfix">
                            <span>留言模块</span>
                            <i id="rotate" class="el-icon-refresh-right"  style="float:right; padding: 3px 0;font-size:16px;cursor: pointer;"></i>
                        </div>
                        <div >
                            <el-form action="sava.php"  method="POST" :label-position="labelPosition" label-width="80px">
                                <el-form-item label="用户名">
                                    <el-input id="username_go"  v-model="customname"></el-input>
                                </el-form-item>
                                <el-form-item label="账号">
                                    <el-input id="mail" v-model="number"></el-input>
                                </el-form-item>
                                <el-form-item label="留言内容">
                                    <el-input type="textarea" id="message" v-model="message"></el-input>
                                </el-form-item>
                                <el-form-item>
                                    <el-button type="primary" @click="submitForm()">提交</el-button>
                                    <el-button @click="resetForm()">重置</el-button>
                                </el-form-item>
                            </el-form>
                        </div>
                    </el-card>
                </div>

                <!--个人信息模块-->
                <div class="col-md-4">
                    <el-card class="box-card">
                        <div slot="header" class="clearfix">
                            <span>个人信息</span>
                            <i id="rotate" class="el-icon-refresh-right" style="float:right; padding: 3px 0;font-size:16px;cursor: pointer;"></i>
                        </div>
                        <div>
                            <div class="text">
                                <span>用户名：</span>
                                <span>{{customname}}</span>
                            </div>
                            <div class="text item">
                                <span>用户账户：</span>
                                <span>{{number}}</span>
                            </div>
                        </div>
                    </el-card>
                </div>
            </div>
        </div>


        <!--          网页查看留言部分-->
        <div class="center-mess_1">
            <div class="row">
                <div class="col-md-8">
                    <el-card>
                        <div slot="header">
                            <span>查看留言</span>
                            <i id="rotate" class="el-icon-refresh-right"  style="float:right; padding: 3px 0;font-size:16px;cursor: pointer;" onclick="loading()"></i>
                        </div>
                        <div>
                            <el-tabs :tab-position="tabPosition" style="">
                                <el-tab-pane label="全部留言">
                                    <el-table :data="list.slice((currentPage-1)*pagesize,currentPage*pagesize)" border style="width: 100%" v-loading="isLoading">
                                        <el-table-column prop="uid"  label="楼层"  align="center" width="80px"></el-table-column>
                                        <el-table-column prop="customname" label="用户姓名"   align="center" width="120px"></el-table-column>
                                        <el-table-column prop="umsg" label="留言内容"  align="center"></el-table-column>
                                        <el-table-column prop="utime" :formatter="dateFormat"  label="留言时间"  align="center"  width="180px"></el-table-column>
                                    </el-table>
                                    <el-pagination background layout="prev, pager, next" :page-size="pagesize" :total="total" :pager-count="5"  @current-change="changePage">
                                    </el-pagination>
                                </el-tab-pane>
                                <el-tab-pane label="我的留言">
                                    配置管理
                                </el-tab-pane>
                            </el-tabs>
                        </div>
                    </el-card>
                </div>
            </div>
        </div>

    </div>

</div>


<script>
    var firstpage = new Vue({
        el:'#firstpage',
        data:{
            list:[],
            userid:'',
            customname:'',
            number:'',
            labelPosition:'left',
            username:'',
            password:'',
            user:'',
            name:'',
            pass:'',
            password1:'',
            message:'',
            tabPosition: 'left',
            pagesize:5,
            currentPage:1,
            total:1,
            isLoading:'',
        },
        mounted:function(){
            this.isloading();
            this.goinusermess().then(()=> this.returnjson());
        },
        methods:{
            //用户登录方法
            //时间：2019.11.08
            goinlogin:function(){
                $.post({
                    url: "manage.php",
                    dataType: "json",
                    data: {
                        'action':'login',
                        'username': $('#username').val(),
                        'password': $('#password').val(),
                    },
                    success:(data)=>{
                        if (data['code']) {
                            $("#exampleModallogin").modal('hide');
                            this.$message({
                                message:data['code'],
                                center:true,
                                type:'success',
                            });
                            this.goinusermess();
                            this.returnjson();
                        }
                        else {
                            this.$message({
                                message:data['msg'],
                                center:true,
                                type:'warning',
                            })
                        }
                    },
                    error: ()=>{
                        alert("登录失败");
                    }
                });
                return false;
            },

            //用户注册方法
            //时间：2019.11.08
            goinrevise:function(){
                $.post({
                    url:"revise.php",
                    dataType: "json",
                    data:{
                        'user':$('#user').val(),
                        'name':$('#name').val(),
                        'pass':$('#pass').val(),
                    },
                    success:(data) =>{
                        if(data['code']){
                            $("#exampleModalrevise").modal('hide');
                            this.$message({
                                message:data['code'],
                                center:true,
                                type:'success',
                            })
                        }else{
                            this.$message({
                                message:data['msg'],
                                center:true,
                                type:'warning',
                            })
                        }
                    },
                    error:() =>{
                        alert("注册失败");
                    }
                });
                return false;
            },

            //载入用户信息方法
            //时间：2019.11.14
            goinusermess:function(){
                $.post({
                    url:'manage.php',
                    dataType:'json',
                    data:{'action':'user'},
                    success:(data)=>{
                        this.userid = data['userid'];
                        this.customname = data['customname'];
                        this.number = data['username']
                    },
                    error:()=>{
                        this.$message({
                            message:'请先登录！',
                            center: true,
                            type: 'warning'
                        });
                    }
                })
            },

            //请求returnjson.php页面返回留言数据（ajax）
            //时间：2019.11.15
            returnjson:function() {
                $.post({
                    url:'returnjson.php',
                    dataType: "json",
                    success:(data)=>{
                        this.isLoading = true;
                        setTimeout(()=>{
                            this.list = data;
                            this.total = data.length;
                            this.isLoading = false;
                        },3000);
                    },
                    error: ()=>{
                        alert("注册失败");
                    }
                });
                return false;
            },

            //时间戳处理
            //时间：2019.11.15
            dateFormat:function(row, column) {
                // var date = row[column.property];
                // if (date == undefined) {
                //     return "";
                // }
                // console.log(moment(date).format("YYYY-MM-DD HH:mm:ss"));
                // return moment(date).format("YYYY-MM-DD HH:mm:ss");
                let date = new Date(parseInt(row.utime) * 1000);
                let Y = date.getFullYear() + '-';
                let M = date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) + '-' : date.getMonth() + 1 + '-';
                let D = date.getDate() < 10 ? '0' + date.getDate() + ' ' : date.getDate() + ' ';
                let h = date.getHours() < 10 ? '0' + date.getHours() + ':' : date.getHours() + ':';
                let m = date.getMinutes()  < 10 ? '0' + date.getMinutes() + ':' : date.getMinutes() + ':';
                let s = date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds();
                return Y + M + D + h + m + s;
            },


            //提交留言模块表单数据到sava.php页面(需要增加逻辑处理当用户登录后才可以进行留言)
            //时间：2019.11.17
            submitForm:function(){
                $.post({
                    url:'save.php',
                    dataType: "json",
                    data: {
                        'username':$('#username_go').val(),
                        'mail': $('#mail').val(),
                        'message': $('#message').val(),
                    },
                    success:(data)=>{
                        if(data['code']){
                            this.$message({
                                message:data['code'],
                                center: true,
                                type: 'success'
                            });
                            this.returnjson();
                        }else{
                            this.$message({
                                message:data['code'],
                                center: true,
                                type: 'warning'
                            });
                        }
                    },
                    error: ()=>{
                        alert("失败");
                    }
                });
                return false;
            },


            //提交留言重置方法
            //时间：2019.11.17
            resetForm:function() {
                this.$message({
                    message:'正在开发中......',
                    center: true,
                    type: 'warning'
                })
            },

            //分页处理方法
            changePage:function(currentPage) {
                this.currentPage = currentPage;
            },

            //留言加载v-loding方法
            isloading:function(){
                this.isLoading = true;
                setTimeout(() => {
                    this.isLoading = false;
                },3000);
            }


        },
    })
</script>


</body>
</html>
