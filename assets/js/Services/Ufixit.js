import AltText from '../Components/Forms/AltText'
import AnchorText from '../Components/Forms/AnchorText'
import BaseFontIsNotUsed from '../Components/Forms/BaseFontIsNotUsed'
import ContentTooLong from '../Components/Forms/ContentTooLong'
import ContrastForm from '../Components/Forms/ContrastForm'
import UfixitReviewOnly from '../Components/Forms/UfixitReviewOnly'
import HeaderForm from '../Components/Forms/HeaderForm'
import TableHeaders from '../Components/Forms/TableHeaders'


const UfixitForms = {
  AnchorMustContainText: AnchorText,
  AnchorSuspiciousLinkText: AnchorText,
  BaseFontIsNotUsed,
  ContentTooLong,
  CssTextHasContrast: ContrastForm,
  CssTextStyleEmphasize: ContrastForm,
  HeadersHaveText: HeaderForm,
  ImageAltIsDifferent: AltText,
  ImageAltIsTooLong: AltText,
  ImageAltNotEmptyInAnchor: AltText,
  ImageHasAlt: AltText,
  ImageHasAltDecorative: AltText,
  ParagraphNotUsedAsHeader: HeaderForm,
  TableDataShouldHaveTableHeader: TableHeaders,
  TableHeaderShouldHaveScope: TableHeaders,
  ImageAltNotPlaceholder: AltText,
}

export default class Ufixit {
  returnIssueForm(activeIssue) {
    if (activeIssue) {
      if (UfixitForms.hasOwnProperty(activeIssue.scanRuleId)) {
        return UfixitForms[activeIssue.scanRuleId]
      }
    }

    console.log('activeIssue', activeIssue)

    return UfixitReviewOnly
  }
}
