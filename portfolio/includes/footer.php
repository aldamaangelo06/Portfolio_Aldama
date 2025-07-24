<footer class="site-footer">
  <p>&copy; <?php echo date("Y"); ?> Angelo Aldama. All rights reserved.</p>
</footer>

<div id="imgModal" class="modal" onclick="closeModal()">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImage" />
</div>
<script>
  function openModal(src) {
    const modal = document.getElementById("imgModal");
    const modalImg = document.getElementById("modalImage");
    modal.style.display = "block";
    modalImg.src = src;
  }

  function closeModal() {
    document.getElementById("imgModal").style.display = "none";
  }
</script>

</body>

</html>