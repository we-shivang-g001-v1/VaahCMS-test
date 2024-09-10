let routes= [];

import dashboard from "./vue-routes-dashboard";
import content from "./vue-routes-contents";

routes = routes.concat(content);
routes = routes.concat(dashboard);
export default routes;
