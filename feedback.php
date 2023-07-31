<?php include 'inc/header.php'; ?>

<?php
$feedback = [
  [
    'id' => 1,
    'name' => 'Jene Santi',
    'email' => 'jene@example.com',
    'body' => 'I love this site.'
  ],
  [
    'id' => 2,
    'name' => 'Thea Santi',
    'email' => 'thea@example.com',
    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, quibusdam.'
  ],
  [
    'id' => 3,
    'name' => 'Leeah Santi',
    'email' => 'leeah@example.com',
    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
  ],
]
?>

<div class="container d-flex flex-column align-items-center">
  <h2>Past Feedback</h2>

  <?php if (empty($feedback)) : ?>
    <p class="lead mt-3">No feedback yet.</p>
  <?php else : ?>
    <?php foreach ($feedback as $item) : ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $item['body']; ?>
          <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- <div class="card my-3">
    <div class="card-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
      molestias animi earum eos dolorem repellat a quibusdam, aperiam vero
      repellendus voluptatibus natus deserunt sed doloribus inventore,
      totam labore maxime perferendis!
    </div>
  </div>

  <div class="card my-3">
    <div class="card-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
      molestias animi earum eos dolorem repellat a quibusdam, aperiam vero
      repellendus voluptatibus natus deserunt sed doloribus inventore,
      totam labore maxime perferendis!
    </div>
  </div>

  <div class="card my-3">
    <div class="card-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
      molestias animi earum eos dolorem repellat a quibusdam, aperiam vero
      repellendus voluptatibus natus deserunt sed doloribus inventore,
      totam labore maxime perferendis!
    </div>
  </div> -->
</div>

<?php include 'inc/footer.php'; ?>