<?php
/**
 * @file
 * This template handles the layout of Social Feed twitter block.
 *
 * Variables available:
 * - $twitter_tweet: An array of the Twitter tweets.
 * - $twitter_tweet['full_username']: Use this display username of the Twitter
 * with base url.
 * - $twitter_tweet['username']: Use this display username of the Twitter.
 * - $twitter_tweet['extra_links']: Use this to display hash tags.
 * - $twitter_tweet['tweet']: Use this to display tweet.
 * - $twitter_tweet['twitter_date']: Use this to tweet date.
 */
?>
<ul>
<?php if (isset($twitter)): ?>
<?php foreach ($twitter as $twitter_tweet): ?>
  <li>
    <a class="tw-username" href="<?php echo $twitter_tweet['full_username']; ?>"><span>@</span><?php echo $twitter_tweet['username']; ?></a>
    <?php if (array_key_exists('extra_links', $twitter_tweet)):foreach ($twitter_tweet['extra_links'] as $extra_link): ?>
      <a class="tw-links" href="<?php echo $extra_link; ?>"><?php echo $extra_link; ?></a><br />
    <?php endforeach; endif; ?>
    <div class="tw-tweet"><?php echo $twitter_tweet['tweet']; ?></div>
    <?php if (isset($twitter_tweet['twitter_date']) && !empty($twitter_tweet['twitter_date'])): ?>
      <div class="tw-date"><?php print $twitter_tweet['twitter_date']; ?></div>
    <?php endif; if (isset($twitter_tweet['tweet_url']) && !empty($twitter_tweet['tweet_url'])): ?>
        <?php print $twitter_tweet['tweet_url']; ?>
    <?php endif; ?>
  </li>
<?php endforeach; ?>
<?php endif; ?>
</ul>
