<?php
$thumbnails = [
    [
        "key" => "fb9deeb1-ee31-423a-847f-46c90e9e6dd9",
        "image_url" => "https://static.wixstatic.com/media/8e607f_6f575f8025a4449e9772eaded5164f60~mv2_d_2988_3984_s_4_2.jpg/v1/fill/w_120,h_120,q_70/8e607f_6f575f8025a4449e9772eaded5164f60~mv2_d_2988_3984_s_4_2.jpg"
    ],
    [
        "key" => "bdd1e389-1763-440a-b2ab-bd0af31744ce",
        "image_url" => "https://static.wixstatic.com/media/8e607f_2ea3776f6a6e47e8ab646e1efe0fa109~mv2_d_4032_3024_s_4_2.jpg/v1/fill/w_120,h_120,q_70/8e607f_2ea3776f6a6e47e8ab646e1efe0fa109~mv2_d_4032_3024_s_4_2.jpg"
    ],
    [
        "key" => "4ced44cc-f507-4e7b-8d1d-21590830e971",
        "image_url" => "https://static.wixstatic.com/media/8e607f_ac5c4969c3b64f9899caaaa18d0fc31a~mv2_d_4032_3024_s_4_2.jpg/v1/fill/w_120,h_120,q_70/8e607f_ac5c4969c3b64f9899caaaa18d0fc31a~mv2_d_4032_3024_s_4_2.jpg"
    ],
    [
        "key" => "98e2f9f9-28bb-4ca1-a42a-79fe1dcdbf64",
        "image_url" => "https://static.wixstatic.com/media/8e607f_b019983a4afd4ed5ade9860dbb31f28c~mv2_d_5312_2988_s_4_2.jpg/v1/fill/w_120,h_120,q_70/8e607f_b019983a4afd4ed5ade9860dbb31f28c~mv2_d_5312_2988_s_4_2.jpg"
    ],
    [
        "key" => "ac431ed9-578f-42ee-a7c5-30867ce6b999",
        "image_url" => "https://static.wixstatic.com/media/8e607f_7e9d262dfbf047f0bf4a1903c401b59d~mv2_d_2988_5312_s_4_2.jpg/v1/fill/w_120,h_120,q_70/8e607f_7e9d262dfbf047f0bf4a1903c401b59d~mv2_d_2988_5312_s_4_2.jpg"
    ],
    [
        "key" => "95d13e61-b5eb-458c-9a4a-4dc7dded5b22",
        "image_url" => "https://static.wixstatic.com/media/8e607f_96aeb53526514abab60df35d31708011~mv2_d_2988_5312_s_4_2.jpg/v1/fill/w_120,h_120,q_70/8e607f_96aeb53526514abab60df35d31708011~mv2_d_2988_5312_s_4_2.jpg"
    ],
    [
        "key" => "8fffa934-8565-4d05-a578-c2ba487fc9c7",
        "image_url" => "https://static.wixstatic.com/media/8e607f_2e83195bc1e84d81962622ef375e66da~mv2_d_2988_5312_s_4_2.jpg/v1/fill/w_120,h_120,q_70/8e607f_2e83195bc1e84d81962622ef375e66da~mv2_d_2988_5312_s_4_2.jpg"
    ]
];

// Check if download button is clicked and create a ZIP file
if (isset($_POST['download_all_images'])) {
    // Create a new ZIP file
    $zip = new ZipArchive();
    $zipFilename = 'images.zip';
    if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) {
        foreach ($thumbnails as $thumbnail) {
            $imageUrl = $thumbnail['image_url'];
            $imageName = basename($imageUrl);
            $imageContent = file_get_contents($imageUrl);
            $zip->addFromString($imageName, $imageContent);
        }
        $zip->close();
        // Provide the download link for the ZIP file
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $zipFilename . '"');
        readfile($zipFilename);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery with Download All Button</title>
    <style>
        .pro-gallery {
            display: flex;
            overflow-x: auto;
            gap: 9px;
        }

        .thumbnailItem {
            width: 120px;
            height: 120px;
            margin-top: 9px;
            margin-left: 9px;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
        }

        .btn-download {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h2>Gallery</h2>

    <div class="pro-gallery inline-styles thumbnails-gallery one-row hide-scrollbars ltr" data-hook="gallery-thumbnails"
        style="width: 765px; height: 138px; margin-top: 9px; margin-bottom: 0px;">
        <div data-hook="gallery-thumbnails-column" class="galleryColumn"
            style="overflow: visible; width: 765px; height: 138px;">
            <?php foreach ($thumbnails as $thumbnail): ?>
                <div class="thumbnailItem" data-key="<?php echo $thumbnail['key']; ?>"
                    style="background-image: url('<?php echo $thumbnail['image_url']; ?>');"></div>
            <?php endforeach; ?>
        </div>
    </div>

    <form method="POST">
        <button type="submit" name="download_all_images" class="btn-download">Download All Images</button>
    </form>

</body>

</html>