@stack('script-tag')
<script>
    const toggleBtn = document.getElementById("toggleMenu")
    const menuOptions = document.getElementById("menuOptions")
    toggleBtn.addEventListener("click", () => {
        menuOptions.classList.toggle("hidden")
    })
</script>
</body>

</html>
