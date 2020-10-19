<?php
//初始化 数组
$arr = array("zhang","san");
//数组追加
array_push($arr,"lisi","wangwu");
print_r($arr);

//设置初始化变量 进行for循环

echo "<table border='1' width='500px'>";

for ($i=1;$i<=9;$i++){
    echo "<tr>";
    for ($j=1;$j<=$i;$j++){
        //循环打印输出
        echo "<td>{$j}x{$i}=".($i*$j)."</td>";
    }
    echo "</tr>";
}

echo "</table>";


/*
 * seeeion与cookie的区别是什么？
 * 1.储存的位置不同
 * cookie 是把数据存储在客户端浏览器上的
 * session 是把数据储存在服务器上的
 *
 * 2.储存的大小不同（上限）
 * 单个的cookie存储的大小<=4kb,并且每个ie页面最多存储20个cookie
 * session虽然能存储很多数据 ，但出于服务器的性能考虑，session不要存太多的数据，并且最好设置删除机制
 *
 * 3.存储的方式不同
 * cookie只能存储ASCLL字符串，并且通过编码的格式存储Unicode编码字符 和 字符集
 * session存储的样式很多  比如 string int 等等
 *
 * 4.域名访问不同
 * cookie 能跨域名访问
 * session 不能跨域名访问
 *
 * 5.浏览器的访问不同
 * session 只能通过 JSESSIONID 进行服务器访问获取数据 ，IE关闭  存储 JSESSIONID 的 cookie 就会消失 服务器就访问不了
 * cookie 只要浏览器开启  就能通过cookie的属性进行设置 访问用户数据
 *
 * 6.存储时效不同
 * web程序员  能通过设置cookie的属性进行保存时效的设置 达到长久的保存期效
 * 但是session不能 只要IE关闭  存储 JSESSIONID 的 cookie 就会消失 服务器就访问不了
 */