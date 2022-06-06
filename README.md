**IZI PORTFOLIO BOILERPLATE**

*Setting up new site from boilerplate*
- Clone boilerplate repo in htdocs and rename
- Create new repo in GitHub and run:
    - git init
    - git add -A
    - git commit -m "Initial commit"
    - git remote add origin git@github.com:zoet24/izi-wp.git
    - git branch -M main
    - git push -u origin main
- Follow steps on https://www.youtube.com/watch?v=OriRDlUbAFg&ab_channel=FounderCopilot to set up new Wordpress site and database
- Change name of theme folders and style.css, then activate theme in Wordpress
- Activate Carbon Fields plugin

*Webpack*
- For instructions on setting up Webpack follow https://dev.to/antonmelnyk/how-to-configure-webpack-from-scratch-for-a-basic-website-46a5

*Development - Principles*
- Update CSS and JS with npm run build
- **Mobile first design**

*Development - Processes*
1. Make list of typographies, vars and containers from wireframes and use config blocks to add styles

*Dashicons convention*
- Admin/config/tools: ->set_icon('admin-tools')
- Images/media: ->set_icon('format-gallery')
- Text and images: ->set_icon('align-pull-left')

*Git convention*
- Start commit message with main subject (eg. 'Functions', 'Blocks', 'Style', 'Script')
- Keep to single sentence with imperative tense
- If commit affects specific device size add this at end of message
- Example: "Blocks: Update gallery-full block with RS Photography additions for mobile and tablet"
