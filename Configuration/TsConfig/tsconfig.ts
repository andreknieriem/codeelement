# add code elem
mod.wizards.newContentElement.wizardItems.special {
	elements {
		ar_codeelem {
			iconIdentifier = extensions-codeelement-codeelement
			title = LLL:EXT:codeelement/Resources/Private/Language/locallang_be.xlf:codelement.title
			description = LLL:EXT:codeelement/Resources/Private/Language/locallang_be.xlf:codelement.description
			tt_content_defValues {
				CType = ar_codeelem
			}
		}
	}
	show := addToList(ar_codeelem)
}
