<?php
require_once 'templates/header.php';

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>"
      </div>
      <p class="post-content">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero ex enim aspernatur animi est sequi consectetur explicabo soluta error maxime, itaque quidem accusantium repellat ad, necessitatibus impedit, nulla qui deserunt.
      Sunt obcaecati voluptas placeat similique quisquam magnam voluptatem! Perferendis eius et mollitia quia. Inventore fuga maxime beatae, aliquam molestiae aperiam at labore corrupti amet debitis commodi libero. Dignissimos, error non?
      Amet, fugiat beatae eum, quidem distinctio saepe dolorem quae magni facere maiores necessitatibus magnam placeat, omnis quos recusandae tempora aspernatur alias. Reprehenderit ab dolor sint recusandae ea, vitae nemo odit.
      Nam corporis explicabo, quo aperiam neque quaerat excepturi nulla alias magnam dolorum suscipit totam quibusdam autem reiciendis? Et ea a, fugiat repudiandae dolor aut temporibus reprehenderit error, libero quam enim.
      Laboriosam, consectetur vitae. Similique, tempore facilis neque ipsam veniam reiciendis aut, quam labore quaerat eveniet dolores fugit eius quo maxime quia molestias vitae? Odit quaerat porro maxime eos ipsum illum.
    </p>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero ex enim aspernatur animi est sequi consectetur explicabo soluta error maxime, itaque quidem accusantium repellat ad, necessitatibus impedit, nulla qui deserunt.
      Sunt obcaecati voluptas placeat similique quisquam magnam voluptatem! Perferendis eius et mollitia quia. Inventore fuga maxime beatae, aliquam molestiae aperiam at labore corrupti amet debitis commodi libero. Dignissimos, error non?
      Amet, fugiat beatae eum, quidem distinctio saepe dolorem quae magni facere maiores necessitatibus magnam placeat, omnis quos recusandae tempora aspernatur alias. Reprehenderit ab dolor sint recusandae ea, vitae nemo odit.
      Nam corporis explicabo, quo aperiam neque quaerat excepturi nulla alias magnam dolorum suscipit totam quibusdam autem reiciendis? Et ea a, fugiat repudiandae dolor aut temporibus reprehenderit error, libero quam enim.
      Laboriosam, consectetur vitae. Similique, tempore facilis neque ipsam veniam reiciendis aut, quam labore quaerat eveniet dolores fugit eius quo maxime quia molestias vitae? Odit quaerat porro maxime eos ipsum illum.
    </p>
    </div>
  </main>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
<?php
require_once 'templates/footer.php';
?>