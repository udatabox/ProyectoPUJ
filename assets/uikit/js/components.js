head.ready(document, function() {
    head.test(
        (head.browser.ie && head.browser.version === 8),
        ["file1.js", "file2.js"],
        ["other.js"],
        function() {
            // run callback

            head.load("file1.css");
        }
    );
});