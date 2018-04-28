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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundRecorder.php">SoundRecorder</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::SoundRecorder Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1AlResource.php#a51b4f3a825c5d68386f8683e3e1053d7">AlResource</a>()</td><td class="entry"><a class="el" href="classsf_1_1AlResource.php">sf::AlResource</a></td><td class="entry"><span class="mlabel">private</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe">getAvailableDevices</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">static</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a610e98e7a73b316ce26b7c55234f86e9">getChannelCount</a>() const</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#ad1d450a80642dab4b632999d72a1bf23">getDefaultDevice</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">static</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#ab16cd53c6884cbf3380c017cee72ba81">getDevice</a>() const</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#aed292c297a3e0d627db4eb5c18f58c44">getSampleRate</a>() const</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#aab2bd0fee9e48d6cfd449b1cb078ce5a">isAvailable</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">static</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a2670124cbe7a87c7e46b4840807f4fd7">onProcessSamples</a>(const Int16 *samples, std::size_t sampleCount)=0</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">protected</span><span class="mlabel">pure virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a7af418fb036201d3f85745bef78ce77f">onStart</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">protected</span><span class="mlabel">virtual</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#aefc36138ca1e96c658301280e4a31b64">onStop</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">protected</span><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#ae4e22ba67d12a74966eb05fad55a317c">setChannelCount</a>(unsigned int channelCount)</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a8eb3e473292c16e874322815836d3cd3">setDevice</a>(const std::string &amp;name)</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a85b7fb8a86c08b5084f8f142767bccf6">setProcessingInterval</a>(Time interval)</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a50ebad413c4f157408a0fa49f23212a9">SoundRecorder</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a715f0fd2f228c83d79aaedca562ae51f">start</a>(unsigned int sampleRate=44100)</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#a8d9c8346aa9aa409cfed4a1101159c4c">stop</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1AlResource.php#a74ad78198cddcb6e5d847177364049db">~AlResource</a>()</td><td class="entry"><a class="el" href="classsf_1_1AlResource.php">sf::AlResource</a></td><td class="entry"><span class="mlabel">private</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php#acc599e61aaa47edaae88cf43f0a43549">~SoundRecorder</a>()</td><td class="entry"><a class="el" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer.php");
?>
