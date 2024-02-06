---
layout: default
slug: /rapport
order: 2
---
<!--  -->

{% assign pages = site.pages | sort: "order" %}

{% for page in pages %} {% if page.url != "/feed.xml" and page.url != "/" and page.url != "/rapport.html" and page.url != "/rapport2.html" %}

{{- page.content | markdownify -}}

{% endif %}

{% endfor %}
