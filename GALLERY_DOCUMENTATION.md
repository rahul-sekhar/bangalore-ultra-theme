Gallery Documentation
=====================

The gallery is split up into years. Each year contains a gallery of all photos from that year and a selection of featured photos. Users can also search the photos from that year by bib number.

The `Media` section of the backend contains all images used on the site. Not just the gallery photos, but also images for the trail, logos, images in pages, etc. ***A photo will only appear in the photo gallery if it has been tagged with a year or added to the featured gallery for a year.***

To add or remove a year, go to `Gallery Years`, under `Media`. The important fields here are the name and the slug. **Make sure the name and slug are both set to the year, for example `2014`.** The parent and description do not matter and can be left blank.

If you want to add a few photos, you can click on `Add New` in the `Media` section and upload them there. They'll appear in the `Media` section. You should then select them and tag them by choosing `Set year: xxxx` in the `Bulk actions` dropdown, and clicking on `Apply`.

This method is inefficient if there are many images to be added. A more efficient way is to put all the images in a zip file (*only zip is supported, not rar or any other format*), and upload the file to the server using an FTP client such as [FileZilla](https://filezilla-project.org/). Once the file is uploaded, go to `Add From Server`, under `Media` and navigate to the directory you uploaded the zip file to on the server. Select the zip file, choose a year to add the photos to, and click on Import. The photos will be added and automatically tagged with the year you selected.

In case this fails, split the photos up into multiple smaller zip files and try again, one by one.

You can easily rotate images in the `Media` section, using the `Bulk Actions` dropdown.

Once you add photos for a year, you should also add a featured gallery for that year. Click `Add new` under `Featured Galleries`. The title of the featured gallery is not displayed anywhere, and is only for your own reference. Choose the year that the featured gallery is for. Then choose images for the gallery (select multiple images by holding down `CTRL`).

To tag bib numbers quickly, use the bib tagging tool, which is at `Tag Bib Numbers` under `Media`.