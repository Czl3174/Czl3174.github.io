<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>期末大作业</title>
    <style type="text/css">
        .container {
            width: 360px;
            height: 260px;
            position: absolute;
            background-color: white;
            top: 50%;
            left: 50%;
            margin-top: -130px;
            margin-left: -180px;
            opacity: 0.85;
            border-radius: 16px;
        }

        body {
            background-image: url("background.jpg");
            background-size: cover;
        }

        table {
            margin: 0 auto;
            border-spacing: 0px 10px;
            position: relative;
        }

        hr {
            width: 300px;
            vertical-align: top center;
        }

        .kuang {
            width: 160px;
        }

        .container .wire {
            height: 1px;
        }

        .big container {
            margin: 0 auto;
            position: relative;
            width: 360px;
            height: 260px;
        }
    </style>
</head>

<body>
    <div class="big container">
        <div class="container">

            <table border="0">
                <tr align="center">
                    <td colspan="2">
                        <font size="4">用户登录</font>
                    </td>
                </tr>
                <tr class="wire">
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <form action="tip.php" method="post">
                        <td align="right" width="142px">账号：</td>
                        <td><input type="text" class="kuang" name="username"></td>
                </tr>
                <tr>
                    <td align="right">密码：</td>
                    <td><input type="password" class="kuang" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="登录">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="取消">
                    </td>
                    </form>
                </tr>
                <tr>
                    <td colspan="2">
                        <image src="indeximage.gif"></image>
                    </td>
                </tr>
            </table>

        </div>
    </div>

</body>

</html>