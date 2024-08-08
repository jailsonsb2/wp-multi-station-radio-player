##  Single / Multi Station WordPress Radio Player Plugin 

### Description

This WordPress plugin simplifies the integration of our customizable HTML5 radio player into your WordPress website. Add a full-featured, responsive radio player to your site's footer, giving your visitors an enhanced audio experience.

### Installation

1. **Download the plugin:**
   - Download the plugin's ZIP file (`meu-radio-player.zip`).

2. **Extract the ZIP file:**
   - Extract the contents of the ZIP file to a folder.

3. **Configure your radio stations:**
   - Open the `js/config.js` file in the extracted plugin folder.
   - Edit the `window.streams.stations` variable and replace the example stations with your own.
   - For each station, fill in the information including name, hash, description, logo, album art (`album`), background cover (`cover`), audio stream URL (`stream_url`), social links, app links, and other relevant information.
   - **Important:** Image paths (`logo`, `album`, `cover`) must be relative to the plugin folder. For example: `assets/image-name.jpg`.

4. **Customize images (optional):**
   - Replace the images in the `assets` folder with your own.

5. **Compress the plugin folder back into a ZIP file.**

6. **Install the plugin in WordPress:**
   - Go to the WordPress admin dashboard.
   - Navigate to "Plugins > Add New".
   - Click on "Upload Plugin" and select the plugin's ZIP file.
   - Activate the plugin.

### Customization (Advanced)

For additional customization, you can edit the following files within the plugin:

- **Colors:** `css/custom.css`
- **Layout:** `player.html`
- **Functionality:** `js/main.js`

### Support

If you have any questions or problems, please refer to the issues page of this repository.

