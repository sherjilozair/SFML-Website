<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Deprecated List'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Deprecated List </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><dl class="reflist">
<dt><a class="anchor" id="_deprecated000018"></a>Class <a class="el" href="structsf_1_1Event_1_1MouseWheelEvent.php">sf::Event::MouseWheelEvent</a>  </dt>
<dd>This event is deprecated and potentially inaccurate. Use <a class="el" href="structsf_1_1Event_1_1MouseWheelScrollEvent.php" title="Mouse wheel events parameters (MouseWheelScrolled) ">MouseWheelScrollEvent</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000021"></a>Member <a class="el" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142a536df84e73859aa44e11e192459470b6">sf::Keyboard::BackSlash</a>  </dt>
<dd>Use Backslash instead  </dd>
<dt><a class="anchor" id="_deprecated000020"></a>Member <a class="el" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142a33aeaab900abcd01eebf2fcc4f6d97e2">sf::Keyboard::BackSpace</a>  </dt>
<dd>Use Backspace instead  </dd>
<dt><a class="anchor" id="_deprecated000019"></a>Member <a class="el" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142a401a183dcfde0a06cb60fe6c91fa1e39">sf::Keyboard::Dash</a>  </dt>
<dd>Use Hyphen instead  </dd>
<dt><a class="anchor" id="_deprecated000023"></a>Member <a class="el" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142ac291de81bdee518d636bc359f2ca77de">sf::Keyboard::Return</a>  </dt>
<dd>Use Enter instead  </dd>
<dt><a class="anchor" id="_deprecated000022"></a>Member <a class="el" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142a460ab09a36f9ed230504b89b9815de88">sf::Keyboard::SemiColon</a>  </dt>
<dd>Use Semicolon instead  </dd>
<dt><a class="anchor" id="_deprecated000001"></a>Member <a class="el" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba5b09910f5d0f39641342184ccd0d1de3">sf::LinesStrip</a>  </dt>
<dd>Use LineStrip instead  </dd>
<dt><a class="anchor" id="_deprecated000004"></a>Member <a class="el" href="classsf_1_1RenderTexture.php#a0e945c4ce7703591c7f240b169744603">sf::RenderTexture::create</a>  (unsigned int width, unsigned int height, bool depthBuffer)</dt>
<dd>Use <a class="el" href="classsf_1_1RenderTexture.php#a49b7b723a80f89bc409a942364351dc3" title="Create the render-texture. ">create(unsigned int, unsigned int, const ContextSettings&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000005"></a>Member <a class="el" href="classsf_1_1RenderWindow.php#a5a784b8a09bf4a8bc97ef9e0a8957c35">sf::RenderWindow::capture</a>  () const</dt>
<dd>Use a <a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">sf::Texture</a> and its <a class="el" href="classsf_1_1Texture.php#ad3cceef238f7d5d2108a98dd38c17fc5" title="Update the texture from the contents of a window. ">sf::Texture::update(const Window&amp;)</a> function and copy its contents into an <a class="el" href="classsf_1_1Image.php" title="Class for loading, manipulating and saving images. ">sf::Image</a> instead.  </dd>
<dt><a class="anchor" id="_deprecated000012"></a>Member <a class="el" href="classsf_1_1Shader.php#aa8618119ed4399df3fd33e78ee96b4fc">sf::Shader::setParameter</a>  (const std::string &amp;name, const <a class="el" href="classsf_1_1Color.php" title="Utility class for manipulating RGBA colors. ">Color</a> &amp;color)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#abc1aee8343800680fd62e1f3d43c24bf" title="Specify value for vec4 uniform. ">setUniform(const std::string&amp;, const Glsl::Vec4&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000015"></a>Member <a class="el" href="classsf_1_1Shader.php#af06b4cba0bab915fa01032b063909044">sf::Shader::setParameter</a>  (const std::string &amp;name, <a class="el" href="structsf_1_1Shader_1_1CurrentTextureType.php" title="Special type that can be passed to setUniform(), and that represents the texture of the object being ...">CurrentTextureType</a>)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#ab18f531e1f726b88fec1cf5a1e6af26d" title="Specify current texture as sampler2D uniform. ">setUniform(const std::string&amp;, CurrentTextureType)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000010"></a>Member <a class="el" href="classsf_1_1Shader.php#a3ac473ece2c6fa26dc5032c07fd7288e">sf::Shader::setParameter</a>  (const std::string &amp;name, const Vector2f &amp;vector)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#a4a2c673c41e37b17d67e4af1298b679f" title="Specify value for vec2 uniform. ">setUniform(const std::string&amp;, const Glsl::Vec2&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000013"></a>Member <a class="el" href="classsf_1_1Shader.php#a8599ee1348407025039b89ddf3f7cb62">sf::Shader::setParameter</a>  (const std::string &amp;name, const <a class="el" href="classsf_1_1Transform.php" title="Define a 3x3 transform matrix. ">Transform</a> &amp;transform)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#abc1aee8343800680fd62e1f3d43c24bf" title="Specify value for vec4 uniform. ">setUniform(const std::string&amp;, const Glsl::Mat4&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000008"></a>Member <a class="el" href="classsf_1_1Shader.php#a7e36e044d6b8adca8339f40c5a4b1801">sf::Shader::setParameter</a>  (const std::string &amp;name, float x, float y, float z)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#aad654ad8de6f0c56191fa7b8cea21db2" title="Specify value for vec3 uniform. ">setUniform(const std::string&amp;, const Glsl::Vec3&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000006"></a>Member <a class="el" href="classsf_1_1Shader.php#a47e4dd78f0752ae08664b4ee616db1cf">sf::Shader::setParameter</a>  (const std::string &amp;name, float x)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#abf78e3bea1e9b0bab850b6b0a0de29c7" title="Specify value for float uniform. ">setUniform(const std::string&amp;, float)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000007"></a>Member <a class="el" href="classsf_1_1Shader.php#ab8d379f40810b8e3eadebee81aedd231">sf::Shader::setParameter</a>  (const std::string &amp;name, float x, float y)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#a4a2c673c41e37b17d67e4af1298b679f" title="Specify value for vec2 uniform. ">setUniform(const std::string&amp;, const Glsl::Vec2&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000014"></a>Member <a class="el" href="classsf_1_1Shader.php#a7f58ab5c0a1084f238dfcec86602daa1">sf::Shader::setParameter</a>  (const std::string &amp;name, const <a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a> &amp;texture)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#a7806a29ffbd0ee9251256a9e7265d479" title="Specify a texture as sampler2D uniform. ">setUniform(const std::string&amp;, const Texture&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000011"></a>Member <a class="el" href="classsf_1_1Shader.php#a87d4a0c6dc70ae68aecc0dda3f343c07">sf::Shader::setParameter</a>  (const std::string &amp;name, const Vector3f &amp;vector)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#aad654ad8de6f0c56191fa7b8cea21db2" title="Specify value for vec3 uniform. ">setUniform(const std::string&amp;, const Glsl::Vec3&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000009"></a>Member <a class="el" href="classsf_1_1Shader.php#aeb468f1bc2d26750b96b74f1e19027fb">sf::Shader::setParameter</a>  (const std::string &amp;name, float x, float y, float z, float w)</dt>
<dd>Use <a class="el" href="classsf_1_1Shader.php#abc1aee8343800680fd62e1f3d43c24bf" title="Specify value for vec4 uniform. ">setUniform(const std::string&amp;, const Glsl::Vec4&amp;)</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000017"></a>Member <a class="el" href="classsf_1_1Text.php#ae4ca753f719c54692fd4d9284573a2c7">sf::Text::getColor</a>  () const</dt>
<dd>There is now fill and outline colors instead of a single global color. Use <a class="el" href="classsf_1_1Text.php#a6b4ba8c435b59e1e05f831e6230dc537" title="Get the fill color of the text. ">getFillColor()</a> or <a class="el" href="classsf_1_1Text.php#a53559d563461089f1172571b375442dc" title="Get the outline color of the text. ">getOutlineColor()</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000016"></a>Member <a class="el" href="classsf_1_1Text.php#afd1742fca1adb6b0ea98357250ffb634">sf::Text::setColor</a>  (const <a class="el" href="classsf_1_1Color.php" title="Utility class for manipulating RGBA colors. ">Color</a> &amp;color)</dt>
<dd>There is now fill and outline colors instead of a single global color. Use <a class="el" href="classsf_1_1Text.php#ab7bb3babac5a6da1802b2c3e1a3e6dcc" title="Set the fill color of the text. ">setFillColor()</a> or <a class="el" href="classsf_1_1Text.php#aa19ec69c3b894e963602a6804ca68fe4" title="Set the outline color of the text. ">setOutlineColor()</a> instead. </dd>
<dt><a class="anchor" id="_deprecated000003"></a>Member <a class="el" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba5338a2c6d922151fe50f235036af8a20">sf::TrianglesFan</a>  </dt>
<dd>Use TriangleFan instead  </dd>
<dt><a class="anchor" id="_deprecated000002"></a>Member <a class="el" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba66643dbbb24bbacb405973ed80eebae0">sf::TrianglesStrip</a>  </dt>
<dd>Use TriangleStrip instead </dd>
</dl>
</div></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
