define CV_COMPILE

Compiling CV =)

endef

export CV_COMPILE

all: style.css
	@echo "$$CV_COMPILE"
	php base.php > index.html

css: style.css
	@echo "Compiling css"

style.css: style.sass
	sass style.sass style.css

.PHONY: all css
