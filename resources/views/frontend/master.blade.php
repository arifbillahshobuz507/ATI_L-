<!doctype html>
<html class="no-js" lang="en">
@include("frontend.includes.styleAndJs")

<body class="template-index body-full-width    product-card-layout-04  enable_text_color_title hide_compare_homepage quick_shop_option_2 show_image_loading">
  <div class="body-content-wrapper">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">Skip to content</a>
    <!-- BEGIN sections: header-group -->
    @include("frontend.includes.header")
    <!-- END sections: header-group -->
    <h1 class="hidden">new-ella-demo</h1>

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "new-ella-demo",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https:\/\/new-ella-demo.myshopify.com\/search?q={search_term_string}",
          "query-input": "required name=search_term_string"
        },
        "url": "https:\/\/new-ella-demo.myshopify.com"
      }
    </script>
    <main id="MainContent" class="wrapper-body content-for-layout focus-none" role="main" tabindex="-1">

      <!-- BEGIN sections: banner -->
      @yield('banner')
      <!-- END sections: banner -->



      <!-- BEGIN sections: containt_9-group -->
      @yield('content_13')
      <!-- END sections: containt_9-group -->




      <!-- BEGIN sections: containt_12-group -->
      @yield('content_12')
      <!-- END sections: containt_12-group -->



      <!-- BEGIN sections: about-group -->
      @yield('about')
      <!--END sections: about-group -->


    </main>

    <!-- BEGIN sections: footer-group -->
    <div class="wrapper-footer">
      @include("frontend.includes.footer")
    </div>
    <!-- END sections: footer-group -->
    <!-- BEGIN: Payment javascript -->
    <script>
      (function (window, document) {
          var loader = function () {
              var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
              script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
              tag.parentNode.insertBefore(script, tag);
          };
  
          window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
      })(window, document);
  </script>
   <!-- END sections:Payment javascript -->
</body>

</html>