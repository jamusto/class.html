var dashboardApp = new Vue({
  el: '#app',
  data: {{
  "name" : "Tapestry",
  "short_description": "Build a visualization layer for the project dashboard",
  "start_date" : "2018-07-01",
  "target_date" : "2018-11-03",
  "budget" : "4950000",
  "spent" : "3456700",
  "projected_spend": "4740500",
  "weekly_effort_target": 400
},
computed: {
  days_left:function () {
    //this.target_date
  }
},
methods:{
  pretty_date: function (d) {
    //do magic
    return d;
  }
}
    message: 'Hello Vue!'
  }
})
