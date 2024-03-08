---
layout: default
---

{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
 {% if page.expose == "Exposé sur le constructeur" %}
    {{- page.content | markdownify -}}
  {% endif %}
{% endfor %}