<!doctype html>
<html amp>
    <head>
        <meta charset="utf-8">
        <title>Shakespeare books</title>
        <link rel="canonical" href="http://localhost/search_task/index.php" />
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>
        <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
        <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
        <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
        <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>

        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            body {
                background-color: white;
            }
            .main_div{
                text-align: center;

            }
            form.amp-form-submit-success [submit-success],
            form.amp-form-submit-error [submit-error]{
                margin-top: 16px;
            }
            form.amp-form-submit-success [submit-success] {
                color: green;
            }
            form.amp-form-submit-error [submit-error] {
                color: red;
            }
            form.amp-form-submit-success.hide-inputs > input {
                display: none;
            }
            .search_result{
                color: #000;
                border: 1px;
            }
        </style>
    </head>
    <body>
        <div class="main_div">
            <h4>Search within Shakespeare books</h4>
            <form method="post" action-xhr="elastic_search.php" target="_top">

                <div class="ampstart-input inline-block relative mb3">
                    <input type="search"
                           placeholder="Search..."
                           name="booksearch" required>
                </div>
                <input type="submit"
                       value="Search"
                       class="ampstart-btn caps">
                <div submit-success>
                    <template type="amp-mustache">
                        {{#content}}
                        <div class="search_result">
                            <h1 id="speker">{{ speaker }}</h1>
                            <p id="text">{{ text_entry }}</p>
                        </div>

                        {{/content}}



                    </template>
                </div>
                <div submit-error>
                    <template type="amp-mustache">
                        Submission failed!
                    </template>
                </div>
            </form>   
        </div>

    </body>
</html>