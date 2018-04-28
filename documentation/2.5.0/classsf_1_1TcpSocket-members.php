<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="inherits.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1TcpSocket.php">TcpSocket</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::TcpSocket Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#aa3e6c984bcb81a35234dcc9cc8369d75a5a3c30fd128895403afc11076f461b19">AnyPort</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a71f2f5c2aa99e01cafe824fee4c573be">close</a>()</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#a68cd42d5ab70ab54b16787f555951c40">connect</a>(const IpAddress &amp;remoteAddress, unsigned short remotePort, Time timeout=Time::Zero)</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#aafbe140f4b1921e0d19e88cf7a61dcbc">create</a>()</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#af1dd898f7aa3ead7ff7b2d1c20e97781">create</a>(SocketHandle handle)</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#ac18f518a9be3d6be5e74b9404c253c1e">disconnect</a>()</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dcab215141f756acdc23c67fad149710eb1">Disconnected</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90">Done</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1dc9854433a28c22e192721179a2df5d">Error</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a675457784284ae2f5640bbbe16729393">getHandle</a>() const</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#a98e45f0f49af1fd99216b9195e86d86b">getLocalPort</a>() const</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#aa8579c203b1fd21beb74d7f76444a94c">getRemoteAddress</a>() const</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#a93bced0afd4b1c60797a85725be04951">getRemotePort</a>() const</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#ab1ceca9ac114b8baeeda3b34a0aca468">isBlocking</a>() const</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca8554848daae98f996e131bdeed076c09">NotReady</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca181c163fad2eaea927185d127c392706">Partial</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#a90ce50811ea61d4f00efc62bb99ae1af">receive</a>(void *data, std::size_t size, std::size_t &amp;received)</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#aa655352609bc9804f2baa020df3e7331">receive</a>(Packet &amp;packet)</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#affce26ab3bcc4f5b9269dad79db544c0">send</a>(const void *data, std::size_t size)</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#a31f5b280126a96c6f3ad430f4cbcb54d">send</a>(const void *data, std::size_t size, std::size_t &amp;sent)</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#a0f8276e2b1c75aac4a7b0a707b250f44">send</a>(Packet &amp;packet)</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a165fc1423e281ea2714c70303d3a9782">setBlocking</a>(bool blocking)</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#a80ffb47ec0bafc83af019055d3e6a303">Socket</a>(Type type)</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> enum name</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8acc02e97e90234b957eaad4dff7f22214">Tcp</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>TcpListener</b> (defined in <a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a>)</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"><span class="mlabel">friend</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php#a62a9bf81fd7f15fedb29fd1348483236">TcpSocket</a>()</td><td class="entry"><a class="el" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">Type</a> enum name</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8a6ebf3094830db4820191a327f3cc6ce2">Udp</a> enum value</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Socket.php#a79a4b5918f0b34a2f8db449089694788">~Socket</a>()</td><td class="entry"><a class="el" href="classsf_1_1Socket.php">sf::Socket</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer.php");
?>
