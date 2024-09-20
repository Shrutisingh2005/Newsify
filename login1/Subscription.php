<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Page</title>
    <link rel="stylesheet" href="subscribe.css">
</head>
<body>
    <main class="main">
        <div class="container news flow">
            <h2 class="news__title">Subscribe to Newsify</h2>
            <div class="news-grid">
                <div class="card__group">
                    <div class="card">
                        <input class="custom" type="checkbox" id="check2" name="daily_bits">
                        <label for="check2">
                            <h5>Daily Bits</h5>
                            <p>Today’s biggest news</p>
                        </label>
                    </div>
                </div>
                <div class="card__group">
                    <div class="card">
                        <input class="custom" type="checkbox" id="check3" name="week_in_review">
                        <label for="check3">
                            <h5>Week in Review</h5>
                            <p>The week’s biggest news</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="news__form">
                <form method="post" action="subscribe.php"> 
                    <input type="email" name="email" placeholder="Enter email address" required> 
                    <button type="submit" class="news__btn">Subscribe</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
