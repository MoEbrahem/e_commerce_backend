<HTML>
<HEAD>
<TITLE>gd 2.0.1</TITLE>
</HEAD>
<BODY>
<!-- BANNER HERE -->
<h1>This is gd 2.0.1 BETA.</h1>
<strong>If you have problems, report them
in detail, and consider using gd 1.8.4 until gd 2.0 final is out.</strong>
<p>
The gd 2.0 documentation update is not complete, but most new features
are documented to some degree and the what's new section is reasonably
complete. Enjoy!
<H2>gd 2.0.1</H2>
<H3>A graphics library for fast image creation</H3>
<H3>Follow this link to the
<A HREF="http://www.boutell.com/gd/">latest version
of this document</A>.</H3>
<blockquote>
<strong>HEY! READ THIS!</strong>
gd 2.0.1 creates PNG, JPEG and WBMP images, not GIF images. This is a 
good thing.  PNG is a more compact format, and full compression is
available.  JPEG works well with photographic images, and is still
more compatible with the major Web browsers than even PNG is. WBMP is
intended for wireless devices (not regular web browsers). Existing
code will need modification to call gdImagePng or gdImageJpeg instead
of gdImageGif. <strong>Please do not ask us to send you the old GIF
version of GD.</strong> Unisys holds a patent on the LZW compression
algorithm, which is used in fully compressed GIF images. The best
solution is to move to legally unencumbered, well-compressed,
modern image formats such as PNG and JPEG as soon as possible.

<p>
gd 2.0.1 <strong>requires</strong> that the following libraries 
also be installed:
<p>
libpng (see the <a href="http://www.libpng.org/pub/png/">libpng home page</a>)
<p>
zlib (see the <a href="http://www.info-zip.org/pub/infozip/zlib/">info-zip home page</a>)
zlib
<p>
jpeg-6b or later, if desired (see the <a href="http://www.ijg.org/">Independent JPEG Group home page</a>)
<p>
If yo