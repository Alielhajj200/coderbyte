<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Highlight</title>
    <style> mark { background: yellow; } </style>
</head>
<body>

    <div>
    <h1>Task 1 </h1>
    <input type="text" id="search" placeholder="Search..." oninput="searchText()">
    <div id="results"></div>

    <script>
        const articles = [
            "Laravel makes development easier.",
            "Blade templates are simple and powerful.",
            "You can highlight search terms in JavaScript."
        ];
//i take this function from a previos project i work
        function searchText() {
            let q = document.getElementById("search").value;
            let res = articles.map(a => q ? a.replace(new RegExp(q, "gi"), m => `<mark>${m}</mark>`) : a);
            document.getElementById("results").innerHTML = res.map(r => `<p>${r}</p>`).join("");
        }
    </script>


</div>
















<div>

</div>

</body>
</html>
