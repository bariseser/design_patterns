<?php
include __DIR__ . '/WebCrawler.php';


class IMBDGenresCommand extends WebCrawler
{

    public function __construct()
    {
        $this->url = "https://www.imdb.com/feature/genre/";
    }

    /**
     * Extract all genres and their search URLs from the page:
     * https://www.imdb.com/feature/genre/
     * @param string $html
     */
    public function parse(string $html): void
    {
        preg_match_all("|href=\"(https://www.imdb.com/search/title\?genres=.*?)\"|", $html, $matches);
        echo "IMDBGenresScrapingCommand: Discovered " . count($matches[1]) . " genres.\n";

        foreach ($matches[1] as $genre) {
            //Queue::get()->add(new IMDBGenrePageScrapingCommand($genre));
        }
    }
}
