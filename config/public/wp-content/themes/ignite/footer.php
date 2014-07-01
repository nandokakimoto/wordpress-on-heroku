</div> <!-- .main -->

<div id="sidebar-primary-container" class="sidebar-primary-container">
    <?php get_sidebar( 'primary' ); ?>
</div>

</div> <!-- .overflow-container -->

<footer class="site-footer" role="contentinfo">
    <h3><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('title'); ?></a></h3>
    <span><?php bloginfo('description'); ?></span>
    <div class="design-credit">
        <span><a href="http://www.competethemes.com/ignite/">Ignite WordPress Theme</a> by Compete Themes</span>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
  function getSelectionHtml() {
    var html = "";
    if (typeof window.getSelection != "undefined") {
      var sel = window.getSelection();
      if (sel.rangeCount) {
        var container = document.createElement("div");
        for (var i = 0, len = sel.rangeCount; i < len; ++i) {
          container.appendChild(sel.getRangeAt(i).cloneContents());
        }
        html = container.innerHTML;
      }
    } else if (typeof document.selection != "undefined") {
      if (document.selection.type == "Text") {
        html = document.selection.createRange().htmlText;
      }
    }
    return html;
  }

  function addLink() {
    var body_element = document.getElementsByClassName('entry post publish')[0];
    var selection = window.getSelection();
    var pagelink = "<p><strong>Leia mais em <a href='http://www.motonow.com.br'>Motonow</a> @ <a href='"+ document.location.href + "'>" + document.location.href + "</a></strong></p>";
    var copytext = getSelectionHtml() + pagelink;
    var newdiv = document.createElement('div');

    newdiv.style.position='absolute';
    newdiv.style.left='-99999px';
    body_element.appendChild(newdiv);
    newdiv.innerHTML = copytext;
    selection.selectAllChildren(newdiv);
    window.setTimeout(function() {
      body_element.removeChild(newdiv);
    },0);
  }

  document.oncopy = addLink;

</script>
</body>
</html>
