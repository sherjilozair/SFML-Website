<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Text.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Text.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_TEXT_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_TEXT_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Transformable.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Font.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/VertexArray.hpp&gt;</span></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor">#include &lt;SFML/System/String.hpp&gt;</span></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;{</div><div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="classsf_1_1Text.php">   48</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Text.php">Text</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Drawable.php">Drawable</a>, <span class="keyword">public</span> <a class="code" href="classsf_1_1Transformable.php">Transformable</a></div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;{</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82">   56</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82">Style</a></div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    {</div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82a2af9ae5e1cda126570f744448e0caa32">   58</a></span>&#160;        Regular       = 0,      </div><div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82af1b47f98fb1e10509ba930a596987171">   59</a></span>&#160;        Bold          = 1 &lt;&lt; 0, </div><div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82aee249eb803848723c542c2062ebe69d8">   60</a></span>&#160;        Italic        = 1 &lt;&lt; 1, </div><div class="line"><a name="l00061"></a><span class="lineno"><a class="line" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82a664bd143f92b6e8c709d7f788e8b20df">   61</a></span>&#160;        Underlined    = 1 &lt;&lt; 2, </div><div class="line"><a name="l00062"></a><span class="lineno"><a class="line" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82a9ed1f5bb154c21269e1190c5aa97d479">   62</a></span>&#160;        StrikeThrough = 1 &lt;&lt; 3  </div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    };</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <a class="code" href="classsf_1_1Text.php">Text</a>();</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <a class="code" href="classsf_1_1Text.php">Text</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; <span class="keywordtype">string</span>, <span class="keyword">const</span> <a class="code" href="classsf_1_1Font.php">Font</a>&amp; font, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> characterSize = 30);</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;    <span class="keywordtype">void</span> setString(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; <span class="keywordtype">string</span>);</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;    <span class="keywordtype">void</span> setFont(<span class="keyword">const</span> <a class="code" href="classsf_1_1Font.php">Font</a>&amp; font);</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;</div><div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;    <span class="keywordtype">void</span> setCharacterSize(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> size);</div><div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div><div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;    <span class="keywordtype">void</span> setLineSpacing(<span class="keywordtype">float</span> spacingFactor);</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <span class="keywordtype">void</span> setLetterSpacing(<span class="keywordtype">float</span> spacingFactor);</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;</div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;    <span class="keywordtype">void</span> setStyle(Uint32 style);</div><div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setColor(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; color);</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;</div><div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;    <span class="keywordtype">void</span> setFillColor(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; color);</div><div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;</div><div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;    <span class="keywordtype">void</span> setOutlineColor(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; color);</div><div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;</div><div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;    <span class="keywordtype">void</span> setOutlineThickness(<span class="keywordtype">float</span> thickness);</div><div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;</div><div class="line"><a name="l00270"></a><span class="lineno">  270</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; getString() <span class="keyword">const</span>;</div><div class="line"><a name="l00271"></a><span class="lineno">  271</span>&#160;</div><div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Font.php">Font</a>* getFont() <span class="keyword">const</span>;</div><div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;</div><div class="line"><a name="l00294"></a><span class="lineno">  294</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getCharacterSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;</div><div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;    <span class="keywordtype">float</span> getLetterSpacing() <span class="keyword">const</span>;</div><div class="line"><a name="l00305"></a><span class="lineno">  305</span>&#160;</div><div class="line"><a name="l00314"></a><span class="lineno">  314</span>&#160;    <span class="keywordtype">float</span> getLineSpacing() <span class="keyword">const</span>;</div><div class="line"><a name="l00315"></a><span class="lineno">  315</span>&#160;</div><div class="line"><a name="l00324"></a><span class="lineno">  324</span>&#160;    Uint32 getStyle() <span class="keyword">const</span>;</div><div class="line"><a name="l00325"></a><span class="lineno">  325</span>&#160;</div><div class="line"><a name="l00338"></a><span class="lineno">  338</span>&#160;    SFML_DEPRECATED <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; getColor() <span class="keyword">const</span>;</div><div class="line"><a name="l00339"></a><span class="lineno">  339</span>&#160;</div><div class="line"><a name="l00348"></a><span class="lineno">  348</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; getFillColor() <span class="keyword">const</span>;</div><div class="line"><a name="l00349"></a><span class="lineno">  349</span>&#160;</div><div class="line"><a name="l00358"></a><span class="lineno">  358</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; getOutlineColor() <span class="keyword">const</span>;</div><div class="line"><a name="l00359"></a><span class="lineno">  359</span>&#160;</div><div class="line"><a name="l00368"></a><span class="lineno">  368</span>&#160;    <span class="keywordtype">float</span> getOutlineThickness() <span class="keyword">const</span>;</div><div class="line"><a name="l00369"></a><span class="lineno">  369</span>&#160;</div><div class="line"><a name="l00385"></a><span class="lineno">  385</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2f</a> findCharacterPos(std::size_t index) <span class="keyword">const</span>;</div><div class="line"><a name="l00386"></a><span class="lineno">  386</span>&#160;</div><div class="line"><a name="l00399"></a><span class="lineno">  399</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> getLocalBounds() <span class="keyword">const</span>;</div><div class="line"><a name="l00400"></a><span class="lineno">  400</span>&#160;</div><div class="line"><a name="l00413"></a><span class="lineno">  413</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> getGlobalBounds() <span class="keyword">const</span>;</div><div class="line"><a name="l00414"></a><span class="lineno">  414</span>&#160;</div><div class="line"><a name="l00415"></a><span class="lineno">  415</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00416"></a><span class="lineno">  416</span>&#160;</div><div class="line"><a name="l00424"></a><span class="lineno">  424</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> draw(<a class="code" href="classsf_1_1RenderTarget.php">RenderTarget</a>&amp; target, <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a> states) <span class="keyword">const</span>;</div><div class="line"><a name="l00425"></a><span class="lineno">  425</span>&#160;</div><div class="line"><a name="l00433"></a><span class="lineno">  433</span>&#160;    <span class="keywordtype">void</span> ensureGeometryUpdate() <span class="keyword">const</span>;</div><div class="line"><a name="l00434"></a><span class="lineno">  434</span>&#160;</div><div class="line"><a name="l00436"></a><span class="lineno">  436</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00438"></a><span class="lineno">  438</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1String.php">String</a>              m_string;              </div><div class="line"><a name="l00439"></a><span class="lineno">  439</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Font.php">Font</a>*         m_font;                </div><div class="line"><a name="l00440"></a><span class="lineno">  440</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>        m_characterSize;       </div><div class="line"><a name="l00441"></a><span class="lineno">  441</span>&#160;    <span class="keywordtype">float</span>               m_letterSpacingFactor; </div><div class="line"><a name="l00442"></a><span class="lineno">  442</span>&#160;    <span class="keywordtype">float</span>               m_lineSpacingFactor;   </div><div class="line"><a name="l00443"></a><span class="lineno">  443</span>&#160;    Uint32              m_style;               </div><div class="line"><a name="l00444"></a><span class="lineno">  444</span>&#160;    <a class="code" href="classsf_1_1Color.php">Color</a>               m_fillColor;           </div><div class="line"><a name="l00445"></a><span class="lineno">  445</span>&#160;    <a class="code" href="classsf_1_1Color.php">Color</a>               m_outlineColor;        </div><div class="line"><a name="l00446"></a><span class="lineno">  446</span>&#160;    <span class="keywordtype">float</span>               m_outlineThickness;    </div><div class="line"><a name="l00447"></a><span class="lineno">  447</span>&#160;    <span class="keyword">mutable</span> <a class="code" href="classsf_1_1VertexArray.php">VertexArray</a> m_vertices;            </div><div class="line"><a name="l00448"></a><span class="lineno">  448</span>&#160;    <span class="keyword">mutable</span> <a class="code" href="classsf_1_1VertexArray.php">VertexArray</a> m_outlineVertices;     </div><div class="line"><a name="l00449"></a><span class="lineno">  449</span>&#160;    <span class="keyword">mutable</span> <a class="code" href="classsf_1_1Rect.php">FloatRect</a>   m_bounds;              </div><div class="line"><a name="l00450"></a><span class="lineno">  450</span>&#160;    <span class="keyword">mutable</span> <span class="keywordtype">bool</span>        m_geometryNeedUpdate;  </div><div class="line"><a name="l00451"></a><span class="lineno">  451</span>&#160;    <span class="keyword">mutable</span> Uint64      m_fontTextureId;       </div><div class="line"><a name="l00452"></a><span class="lineno">  452</span>&#160;};</div><div class="line"><a name="l00453"></a><span class="lineno">  453</span>&#160;</div><div class="line"><a name="l00454"></a><span class="lineno">  454</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00455"></a><span class="lineno">  455</span>&#160;</div><div class="line"><a name="l00456"></a><span class="lineno">  456</span>&#160;</div><div class="line"><a name="l00457"></a><span class="lineno">  457</span>&#160;<span class="preprocessor">#endif // SFML_TEXT_HPP</span></div><div class="line"><a name="l00458"></a><span class="lineno">  458</span>&#160;</div><div class="line"><a name="l00459"></a><span class="lineno">  459</span>&#160;</div><div class="ttc" id="classsf_1_1Font_php"><div class="ttname"><a href="classsf_1_1Font.php">sf::Font</a></div><div class="ttdoc">Class for loading and manipulating character fonts. </div><div class="ttdef"><b>Definition:</b> <a href="Font_8hpp_source.php#l00050">Font.hpp:50</a></div></div>
<div class="ttc" id="classsf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00045">String.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Transformable_php"><div class="ttname"><a href="classsf_1_1Transformable.php">sf::Transformable</a></div><div class="ttdoc">Decomposed transform defined by a position, a rotation and a scale. </div><div class="ttdef"><b>Definition:</b> <a href="Transformable_8hpp_source.php#l00041">Transformable.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:40</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Text_php"><div class="ttname"><a href="classsf_1_1Text.php">sf::Text</a></div><div class="ttdoc">Graphical text that can be drawn to a render target. </div><div class="ttdef"><b>Definition:</b> <a href="Text_8hpp_source.php#l00048">Text.hpp:48</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Drawable_php"><div class="ttname"><a href="classsf_1_1Drawable.php">sf::Drawable</a></div><div class="ttdoc">Abstract base class for objects that can be drawn to a render target. </div><div class="ttdef"><b>Definition:</b> <a href="Drawable_8hpp_source.php#l00044">Drawable.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1Text_php_aa8add4aef484c6e6b20faff07452bd82"><div class="ttname"><a href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82">sf::Text::Style</a></div><div class="ttdeci">Style</div><div class="ttdoc">Enumeration of the string drawing styles. </div><div class="ttdef"><b>Definition:</b> <a href="Text_8hpp_source.php#l00056">Text.hpp:56</a></div></div>
<div class="ttc" id="classsf_1_1VertexArray_php"><div class="ttname"><a href="classsf_1_1VertexArray.php">sf::VertexArray</a></div><div class="ttdoc">Define a set of one or more 2D primitives. </div><div class="ttdef"><b>Definition:</b> <a href="VertexArray_8hpp_source.php#l00045">VertexArray.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; float &gt;</a></div></div>
<div class="ttc" id="classsf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...) </div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; float &gt;</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
