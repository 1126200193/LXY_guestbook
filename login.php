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

        },
    })
</script>


</body>
</html>
