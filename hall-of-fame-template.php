<?php
/*
Template Name: Hall of fame page
*/
while (have_posts()) : the_post();
  $course_record_routes = get_field('course_record_routes');
  $annual_record_years = get_field('annual_record_years');
?>
  <div id="records" class="content">
    <h2>Hall of Fame</h2>

    <ul class="filters">
      <li class="current course"><span>Course records</span></li>

      <?php if($annual_record_years) : ?>
        <li class="seperator">/</li>
        <li class="year">
          <span>Winners of</span>
          <ul>
          <?php foreach($annual_record_years as $year) : ?>
            <li><span><?php echo $year['year'] ?></span></li>
          <?php endforeach; ?>
          </ul>
        </li>
      <?php endif; ?>

    </ul>

    <div class="table-container">
      <table class="course">
      <?php foreach(to_array($course_record_routes) as $route) : ?>
        <tr class="heading">
          <td colspan="3">
            <h4><span><?php echo $route['name']; ?></span></h4>
          </td>
        </tr>

        <?php foreach($route['events'] as $event) : ?>
          <tr>
            <td class="event"><?php echo $event['name']; ?></td>
            <td class="winner"><?php echo ucwords(strtolower($event['winner'])); ?></td>
            <td class="time"><?php echo $event['time']; ?></td>
          </tr>
        <?php endforeach; ?>
      <?php endforeach; ?>
      </table>

      <?php foreach(to_array($annual_record_years) as $year) : ?>
        <table class="year-winners year<?php echo $year['year']; ?>">

        <?php foreach(to_array($year['routes']) as $route) : ?>
          <tr class="heading">
            <td colspan="4">
              <h4><span><?php echo $route['name']; ?></span></h4>
            </td>
          </tr>

          <?php foreach(to_array($route['events']) as $event) :
            foreach(to_array($event['winners']) as $index => $winner) :
              if ($index == 0) : ?>
                <tr class="event-row">
                  <td class="event" rowspan="<?php echo count($event['winners']); ?>"><?php echo $event['name']; ?></td>
              <?php else : ?>
                <tr>
              <?php endif; ?>

                <td class="person"><?php echo ($index + 1) . '. ' . ucwords(strtolower($winner['name'])); ?></td>
                <td class="time"><?php echo $winner['time']; ?></td>
              </tr>
            <?php endforeach;
          endforeach;
        endforeach; ?>
        </table>
      <?php endforeach; ?>
    </div>
  </div>

<?php
endwhile;
?>
