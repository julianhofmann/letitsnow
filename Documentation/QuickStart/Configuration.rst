.. include:: /Includes.rst.txt

.. _quickConfiguration:

===================
Quick configuration
===================

"Let it snow!" can be used in two different (mutually exclusive) ways:

Global activation via TypoScript template
=========================================

If you want some snow on all pages, you just need to include the TypoScript
template:

Go module :guilabel:`Web > Template` and chose your root page. It should
already contain a TypoScript template record. Switch to view
:guilabel:`Info/Modify` and click on :guilabel:`Edit the whole template record`.

.. image:: /Images/LetitsnowIncludeTypoScriptGlobal.png

Switch to tab :guilabel:`Includes` and add the following templates from the list
to the right: :guilabel:`Let it snow: Global (letitsnow)`.


"Let it snow!" via content element on an page
=====================================================

Therefore, it is necessary to include the appropriate TypoScript provided by
this extension.

Go module :guilabel:`Web > Template` and chose your root page. It should
already contain a TypoScript template record. Switch to view
:guilabel:`Info/Modify` and click on :guilabel:`Edit the whole template record`.

.. image:: /Images/LetitsnowIncludeTypoScriptPlugin.png

Switch to tab :guilabel:`Includes` and add the following templates from the list
to the right: :guilabel:`Let it snow: Plugin (letitsnow)`.

Afterwards place a new content element "Let it snow!" on the desired page.

.. image:: /Images/LetitsnowCreateNewContentElementGeneral.png

.. image:: /Images/LetitsnowCreateNewContentElementPlugin.png
