define ALL_COMPILE_BODY

*************** Compiling the whole project ****************

It's time to blast some lines down the terminal
and some files into the project

************************************************************

endef

define CSS_COMPILE_BODY

******************* Compiling all css **********************

It's time to blast some lines down the terminal
and some files into the project

************************************************************

endef

export ALL_COMPILE_BODY
export CSS_COMPILE_BODY

all: style.css
	@echo "$$ALL_COMPILE_BODY"
	php base.php > index.html
	cd cv; make

# css to contain all css files if there will be more
css: style.css
	@echo "$$CSS_COMPILE_BODY"

style.css: style.sass
	sass style.sass style.css

.PHONY: all css
