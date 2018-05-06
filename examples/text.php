<?php
require __DIR__ . '/../vendor/autoload.php';

use Shotstack\Api\RenderApi;
use Shotstack\ApiClient;
use Shotstack\Configuration;
use Shotstack\Model\Edit;
use Shotstack\Model\Output;
use Shotstack\Model\Soundtrack;
use Shotstack\Model\Timeline;
use Shotstack\Model\TitleClip;
use Shotstack\Model\TitleClipOptions;
use Shotstack\Model\Track;

class TextDemo
{
    public function render()
    {
        $config = new Configuration();
        $config
            ->setHost(getenv('SHOTSTACK_HOST'))
            ->setApiKey('x-api-key', getenv('SHOTSTACK_KEY'));

        $client = new ApiClient($config);

        $soundtrack = new Soundtrack();
        $soundtrack
            ->setEffect("fadeInOut")
            ->setSrc("https://s3-ap-southeast-2.amazonaws.com/shotstack-public/disco.mp3");

        $titleOptions = new TitleClipOptions();
        $titleOptions
            ->setEffect('minimal');

        $title = new TitleClip();
        $title
            ->setType('title')
            ->setSrc('Hello')
            ->setIn(0)
            ->setOut(5)
            ->setStart(0)
            ->setOptions($titleOptions);

        $track1 = new Track();
        $track1
            ->setClips([$title]);

        $timeline = new Timeline();
        $timeline
            ->setBackground("#000000")
            ->setSoundtrack($soundtrack)
            ->setTracks([$track1]);

        $output = new Output();
        $output
            ->setFormat('mp4')
            ->setResolution('sd');

        $edit = new Edit();
        $edit
            ->setTimeline($timeline)
            ->setOutput($output);

        $render = new RenderApi($client);

        try {
            $response = $render->postRender($edit)->getResponse();
        } catch (Exception $e) {
            die('Request failed: ' . $e->getMessage());
        }

        echo $response->getMessage() . "\n";
        echo ">> Now check the progress of your render by running:\n";
        echo ">> php examples/status.php " . $response->getId() . "\n";
    }
}

$editor = new TextDemo();
$editor->render();